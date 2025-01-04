<?php

namespace OliverCharlesLowe\Permission\Http\Controllers;

use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('permission::layouts.app');
        
    }
}