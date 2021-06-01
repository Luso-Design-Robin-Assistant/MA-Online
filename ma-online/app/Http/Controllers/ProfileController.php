<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($user)
    {
        // $userData = DB::table('users')
        // ->where('name', $user)
        // ->value('id');

        return view('profile', compact('user'));
    }

    public function profileEdit() {
        return view('profile.show');
    }
}
