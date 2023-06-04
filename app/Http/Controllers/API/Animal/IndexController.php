<?php

namespace App\Http\Controllers\API\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $animals = Animal::all();
        return response()->json($animals);
    }
}
