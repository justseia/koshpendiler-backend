<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use App\Models\TermsConditions;
use Illuminate\Http\Request;

class TermsConditionsController extends Controller
{
    public function __invoke()
    {
        $terms_conditions = TermsConditions::all();
        return response()->json($terms_conditions);
    }
}
