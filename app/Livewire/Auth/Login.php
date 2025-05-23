<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate()]
    public string $email = '';
    #[Validate()]
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }

    public function login()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->title(__('static.webpages.login'));
    }
}
