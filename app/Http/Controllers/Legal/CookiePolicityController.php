<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CookiePolicityController extends Controller
{
     public function index()
    {
        return view('legal.cookie');
    }
}
