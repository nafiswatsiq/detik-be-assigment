<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    #[Validate('required|min:3')] 
    public string $name;

    #[Validate('required|email')] 
    public string $email;

    #[Validate('required|min:8')]
    public string $password;

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole('user');
        
        Auth::login($user);

        return redirect()->intended('/');
    }

    #[Layout('layouts.guest')] 
    public function render()
    {
        return view('livewire.auth.register');
    }
}
