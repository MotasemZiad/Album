<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function index(){
        return view('welcome');
    }
    public function detailsPost(){
        return view('details');
    }
}
