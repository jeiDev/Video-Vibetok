<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HowUseController extends Controller
{
      public function index()
    {
        return view('legal.how-to-use');
    }
}
