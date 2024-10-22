<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $stateId = $request->input('state_id');

        // Mengambil data cities berdasarkan state_id
        $cities = City::where('state_id', $stateId)->pluck('name', 'id');

        return response()->json($cities);
    }
}
