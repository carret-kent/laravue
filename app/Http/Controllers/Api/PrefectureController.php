<?php

namespace App\Http\Controllers\Api;

use App\ModelFilters\PrefectureFilter;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrefectureController extends Controller
{
    public function index(Request $request)
    {
        return Prefecture::filter($request->all(), PrefectureFilter::class)->get();
    }
}
