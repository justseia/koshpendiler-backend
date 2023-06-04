<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        auth()->user()->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'password' => Hash::make($request->password,),
            'image' => $request->image,
        ]);
        return response()->json(['status' => 200, 'message' => 'Success']);
    }
}
