<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// For Query Builder Recommended library
use Illuminate\Support\Facades\DB;

// Aggregate Functions (5) : count, min, max, avg, sum
// Use Northwind Database

class AggregateController extends Controller
{
    public function countRow(){
        return DB::table('orders')->count();
    }   

    public function minRow(){
        return DB::table('orders')->min('shipping_fee');
    }

    public function maxRow(){
        return DB::table('orders')->max('shipping_fee');
    }

    public function sumRow(){
        return DB::table('orders')->sum('shipping_fee');
    }

    public function avgRow(){
        return DB::table('orders')->avg('shipping_fee');
    }
}
