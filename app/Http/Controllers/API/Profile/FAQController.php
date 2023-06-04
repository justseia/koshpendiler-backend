<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function __invoke()
    {
        $faq = FAQ::all();
        return response()->json($faq);
    }
}
