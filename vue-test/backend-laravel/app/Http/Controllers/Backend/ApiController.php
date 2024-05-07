<?php

namespace App\Http\Controllers\Backend;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ApiController extends Controller
{
    public function get_services()
    {
        $data = Services::get();
        return response()->json([
            'data' => $data,
            'status' => 200
        ]);
    }
}