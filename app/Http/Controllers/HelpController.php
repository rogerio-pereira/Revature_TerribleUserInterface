<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index($title)
    {
        $viewName = 'help.'.$title;

        return view($viewName);
    }
}
