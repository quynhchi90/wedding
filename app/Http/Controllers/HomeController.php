<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// TODO this is dummy controller. We will remove this.
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function page()
    {
        return 'This is sample page.';
    }
}
