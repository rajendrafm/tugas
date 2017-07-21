<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kurikulumController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prjct.kurikulum');
    }
}