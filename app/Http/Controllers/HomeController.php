<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use League\Csv\Reader;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
