<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.contact');
    }
}