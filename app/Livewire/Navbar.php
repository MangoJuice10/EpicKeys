<?php

namespace App\Livewire;

use App\Models\Genre;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Navbar extends Component
{
    public $genres = [];
    public string $selectedGenre;

    public function mount()
    {
        $this->genres = Genre::limit(10)->get();
        $this->selectedGenre = __('static.genres.all');
    }

    public function updateSelectedGenre($genre) {
        $this->selectedGenre = $genre;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
