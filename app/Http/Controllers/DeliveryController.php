<?php

// app/Http/Controllers/DeliveryController.php
namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Services\DistanceMatrixService;

class DeliveryController extends Controller
{
    public function calculateDistanceMatrixForPendingDeliveries(DistanceMatrixService $distanceMatrixService)
    {
        $pendingDeliveries = Delivery::where('status', 'pending')->get();

        $addresses = [];
        foreach ($pendingDeliveries as $delivery) {
            $addresses[] = $delivery->address;
        }
dd(count($addresses));
        $distanceMatrix = $distanceMatrixService->calculateDistanceMatrix($addresses);

        // Process distance matrix as needed
        // Example: Log distances, update delivery records with distances, etc.

        return response()->json($distanceMatrix);
    }
}

