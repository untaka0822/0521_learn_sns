<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    // ここにどんな動きをするかの処理を記述していく
    public function index()
    {
    	return view('welcome');
    }

    public function contact()
    {
    	return view('contact');
    }
}
