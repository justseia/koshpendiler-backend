<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileUpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        auth()->user()->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Success',
        ]);
    }
}
