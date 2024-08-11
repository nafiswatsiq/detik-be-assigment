<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Validate('required|email')] 
    public string $email;

    #[Validate('required|min:8')]
    public string $password;

    public function submit()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', 'Email or password is incorrect.');
            return;
        }
        
        return redirect()->intended('/');
    }

    #[Layout('layouts.guest')] 
    public function render()
    {
        return view('livewire.auth.login');
    }
}
