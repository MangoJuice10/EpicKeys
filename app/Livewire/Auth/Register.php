<?php

namespace App\Livewire\Auth;

use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate()]
    public string $nickname;
    #[Validate()]
    public string $email;
    #[Validate()]
    public string $password;
    #[Validate()]
    public string $password_confirmation;

    public function rules(): array
    {
        return [
            //validate unique nickname and email
            'nickname' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password'
        ];
    }

    public function register()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->title(__('static.webpages.register'));
    }
}
