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

    public function aurora()
    {
        return view('feature/aurora');
    }
    public function boracay()
    {
        return view('feature/boracay');
    }
    public function cebu()
    {
        return view('feature/cebu');
    }
    public function hongkong()
    {
        return view('feature/hongkong');
    }
    public function kuala()
    {
        return view('feature/kuala');
    }
    public function puerto()
    {
        return view('feature/puerto');
    }
    public function siargao()
    {
        return view('feature/siargao');
    }
    public function singapore()
    {
        return view('feature/singapore');
    }
    public function taipei()
    {
        return view('feature/taipei');
    }
    public function tokyo()
    {
        return view('feature/tokyo');
    }
    public function users()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
}
