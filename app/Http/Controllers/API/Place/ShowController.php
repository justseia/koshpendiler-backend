<?php

namespace App\Http\Controllers\API\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Place $place)
    {
        return response()->json($place);
    }
}
