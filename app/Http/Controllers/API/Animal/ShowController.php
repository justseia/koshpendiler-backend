<?php

namespace App\Http\Controllers\API\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Animal $animal)
    {
        return response()->json($animal);
    }
}
