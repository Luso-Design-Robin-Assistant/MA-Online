<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $userData = DB::table('users')
        ->where('name', $user)
        ->value('id');

        // $profilePic = $userData[0]->profile_photo_path;

        // $videos = DB::table('posts')
        // ->select('*')
        // ->where('id', $userData[0]->id)
        // ->orderByDesc('updated_at')
        // ->get();

        return view('livewire.show-profile', compact('user'));
    }

    public function profileEdit() {
        return view('profile.show');
    }
}
