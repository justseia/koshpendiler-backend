<?php

namespace App\Http\Controllers\API\Profile;

use App\Http\Controllers\Controller;
use App\Models\AppInfo;
use Illuminate\Http\Request;

class AppInfoController extends Controller
{
    public function __invoke()
    {
        $app_info = AppInfo::all();
        return response()->json($app_info);
    }
}
