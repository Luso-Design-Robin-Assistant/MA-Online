<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Profile extends Controller
{
    public function userProfile() {
        return view('user-profile');
    }
}
