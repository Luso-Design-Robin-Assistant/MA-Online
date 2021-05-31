<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowProfile extends Component
{
    public function render()
    {
        return view('livewire.show-profile');
    }

    public function profileEdit(Request $request)
    {
        return view('profile.show');
    }
}
