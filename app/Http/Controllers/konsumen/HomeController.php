<?php

namespace App\Http\Controllers\konsumen;

use Illuminate\Http\Request;
use Laravel\Ui\ControllersCommand;

class HomeController extends ControllersCommand
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
    return view('konsumen.home.index');
    }
}
