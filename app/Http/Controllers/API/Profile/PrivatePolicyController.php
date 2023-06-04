<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use App\Models\PrivatePolicy;
use Illuminate\Http\Request;

class PrivatePolicyController extends Controller
{
    public function __invoke()
    {
        $private_policy = PrivatePolicy::all();
        return response()->json($private_policy);
    }
}
