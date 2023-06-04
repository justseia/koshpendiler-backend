<?php

namespace App\Http\Controllers\API\Place;

use App\Http\Controllers\Controller;
use App\Models\PlaceOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __invoke(Request $request)
    {
        PlaceOrder::create([
            'place_id' => $request->place_id,
            'user_id' => $request->user_id,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Success',
        ]);
    }
}
