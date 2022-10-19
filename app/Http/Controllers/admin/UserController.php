<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        return view('User.Index');
    }

    public function create(){
        return view('User.Create');

    }

    public function update(){
        return view('User.Update');
    }
}
