<?php

// WhyController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyController extends Controller
{
    public function index()
    {
        return view('why');
    }
}
