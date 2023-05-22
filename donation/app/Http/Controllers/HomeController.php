<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dash');
    }
}
