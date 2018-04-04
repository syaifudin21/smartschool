<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TuController extends Controller
{
    public function index()
    {
    	return view('tu.index');
    }

}
