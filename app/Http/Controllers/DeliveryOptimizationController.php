<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livery;
use Illuminate\Support\Facades\Http;

class DeliveryOptimizationController extends Controller
{
    public function optimizeDelivery(Request $request)
    {
        $distanceMatrix = $request->json()->all();

        $response = Http::get('http://127.0.0.1:8000/calculate-distance-matrix', [
            'distance_matrix' => $distanceMatrix,
        ]);

        if ($response->successful()) {
            $distanceMatrix = $response->json();
        } else {
            return response()->json(['error' => 'Failed to fetch distance matrix'], $response->status());
        }

        $standingDeliveries = Livery::where('status', 'standing')->get();

        if ($standingDeliveries->isEmpty()) {
            return response()->json(['message' => 'No standing deliveries found']);
        }

        $optimizedRoutes = [];

        foreach ($standingDeliveries as $delivery) {
            $randomPointIndex = array_rand($distanceMatrix);

            // Add delivery details to the corresponding optimized route
            $optimizedRoutes[$randomPointIndex][] = [
                'delivery_id' => $delivery->id,
                'delivery_name' => $delivery->name,
                'delivery_phone' => $delivery->phone,
            ];
        }

        // Return optimized routes as JSON response
        return response()->json(['optimized_routes' => $optimizedRoutes]);
    }
}
