<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class VideoShare extends Controller
{
    public function index()
    {


    }


    // Store videos 
    public function store(Request $request)
    {
        dd($request);

    }
}
