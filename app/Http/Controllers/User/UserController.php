<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return View('backend.user.user');
    }

    function create(){
        return View('backend.user.create');
    }

    function edit(){
        return View('backend.user.edit');
    }

    function store(){
        dd("test");
    }
}
