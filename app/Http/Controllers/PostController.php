<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
       // $_POST =DB::table('admins')->get();
        //return view('welcome',compact('POST'));
    }
}
