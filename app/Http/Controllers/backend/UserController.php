<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;


class UserController extends Controller
{
    function index()
    {
        $pegawai = Pegawai::all();
        return View('backend.user.user', compact('pegawai'));
    }

    function create(){
        return View('backend.user.create');
    }

    function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return View('backend.user.edit',compact('pegawai'));
    }

    function store(){
        dd("test");
    }
}
