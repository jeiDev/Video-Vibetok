<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;

class DMCAController extends Controller
{
     public function index()
    {
        return view('legal.dmca');
    }
}
