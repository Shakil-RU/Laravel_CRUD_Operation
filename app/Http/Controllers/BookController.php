<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome()
    {
        return view(view: 'welcome');
    }
}
