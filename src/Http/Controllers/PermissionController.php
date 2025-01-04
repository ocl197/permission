<?php

namespace Olive\Permission\Http\Controllers;

use Illuminate\Routing\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permission::permissions.index');
    }
}
