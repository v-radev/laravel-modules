<?php

namespace Modules\Main\Controllers;

class HomeController extends ControllerAbstract
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('main::home');
    }
}
