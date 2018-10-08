<?php

namespace App\Http\Controllers\Api;

use App\ModelFilters\CityFilter;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(Request $request)
    {
        return City::filter($request->all(), CityFilter::class)->get();
    }
}
