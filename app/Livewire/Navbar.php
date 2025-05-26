<?php

namespace App\Livewire;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $genres = [];
    public $userPhoto = '';

    public function mount()
    {
        $this->genres = Genre::limit(10)->get();
        $this->userPhoto = Auth::check() ? Storage::url(Auth::user()->path_to_photo) : asset('images/icons/profile.svg');
    }

    #[On('user-login-success')]
    public function updateUserPhotoPath(User $user): void
    {
        if (Auth::check()) {
            $this->userPhoto = Storage::url($user->path_to_photo);
        } else {
            $this->userPhoto = asset('images/icons/profile.svg');
        }
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
