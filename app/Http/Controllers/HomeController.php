<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use League\Csv\Reader;

class HomeController extends Controller
{
    public function index()
    {
        $reader = Reader::createFromPath(storage_path() . '/../osmi-tech-survey-2016-report-20160402.csv');
        foreach ($reader as $index => $row) {
            dd($row);
        }
    }
}
