<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
            'password' => 'required',
        ];
    }

    public function login()
    {
        $credentials = $this->validate();
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'password' => [__('auth.failed')],
            ]);
        }

        request()->session()->regenerate();
        $this->dispatch('user-login-success', user: Auth::user());

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->title(__('static.webpages.login.title'));
    }
}
