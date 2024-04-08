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
        $distanceMatrix = $distanceMatrixService->calculateDistanceMatrix($addresses);

        return response()->json($distanceMatrix);
    }
}

