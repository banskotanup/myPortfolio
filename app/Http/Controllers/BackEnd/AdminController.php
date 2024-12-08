<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['title'] = "Dashboard";
        return view('backEnd.index', $data);
    }

    public function login(){
        $data['title'] = "Admin Login";
        return view('backEnd.auth.login', $data);
    }
}
