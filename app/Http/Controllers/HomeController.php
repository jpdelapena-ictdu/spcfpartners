<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function landingpage()
    {
        $schools = School::all();
        return view('welcome')
            ->with('schools', $schools);
    }
}