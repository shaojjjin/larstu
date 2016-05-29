<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('test.index');
    }

    public function post()
    {
    	return view('test.post');
    }
}
