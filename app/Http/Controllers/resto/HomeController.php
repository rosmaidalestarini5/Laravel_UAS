<?php

namespace App\Http\Controllers\resto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Ui\ControllersCommand;

class HomeController extends ControllersCommand
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        if(Gate::allows('isResto')){
            return redirect('resto/home');
            }else if(Gate::allows('isKurir')){
            return redirect('kurir/home');
            }else if(Gate::allows('isKonsumen')){
            return redirect('konsumen/home');
            }
    return view('resto.home.index');
    }
}