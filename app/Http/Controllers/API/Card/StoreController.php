<?php

namespace App\Http\Controllers\API\Card;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        Card::create([
            'user_id' => auth()->user()->id,
            'full_name' => $request->full_name,
            'number' => $request->full_name,
            'date' => $request->full_name,
            'cvc' => $request->full_name,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Success',
        ]);
    }
}
