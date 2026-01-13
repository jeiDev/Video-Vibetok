<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function terms()
    {
        return view('legal.terms');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function dmca()
    {
        return view('legal.dmca');
    }

    public function howToUse()
    {
        return view('legal.how-to-use');
    }
}
