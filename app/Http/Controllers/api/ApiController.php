<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCountriesByStatus(){
        return response()->json([
            'message' => "Product updated successfully!",
            'product' => '$product'
        ], 200); 
    }
}
