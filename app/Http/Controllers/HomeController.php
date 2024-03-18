<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function one()
    {
        return view('package/one');
    }
    public function two()
    {
        return view('package/two');
    }
    public function three()
    {
        return view('package/three');
    }
    public function four()
    {
        return view('package/four');
    }
    public function five()
    {
        return view('package/five');
    }
    public function six()
    {
        return view('package/six');
    }
    public function seven()
    {
        return view('package/seven');
    }
    public function eight()
    {
        return view('package/eight');
    }
    public function nine()
    {
        return view('package/nine');
    }
    public function ten()
    {
        return view('package/ten');
    }
    public function users()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
}
