<?php

namespace App\Http\Controllers\API\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $places = Place::all();
        return response()->json($places);
    }
}
