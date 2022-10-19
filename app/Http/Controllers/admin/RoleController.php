<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('Role.Index');
    }

    public function create(){
        return view('Role.Create');

    }

    public function update(){
        return view('Role.Update');
    }
}
