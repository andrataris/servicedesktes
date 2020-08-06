<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserentryController extends Controller
{
    //
    public function index() {

        return view ('userentry/create');
     }
}
