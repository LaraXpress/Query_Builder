<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// recommended to use this library using Query Builder perform
use Illuminate\Support\Facades\DB;

// Select case : unique values, single column values, multiple column values
// For selection, No need json encode generation but recommended with retrieving

class SelectController extends Controller
{
    public function uniqueSelect(){
        return DB::table('customers')->distinct()->get();
    }    
  
  public function signleColumnSelect(){        
        return DB::table('customers')->select('first_name')->get();    // json object   
     // return DB::table('customers')->pluck('first_name');           //  array object
    }

    public function multipleColumnSelect(){
       return DB::table('customers')->select('first_name','last_name','job_title')->get();  // json object       
    }
}
