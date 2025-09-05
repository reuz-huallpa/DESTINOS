<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Register extends Component
{
    public $name, $email, $dni, $telefono, $password, $password_confirmation;

    public function register()
    {

        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'dni' => 'required|string|min:6|max:15|unique:users',
            'telefono' => 'required|string|min:6|max:20',
            'password' => 'required|min:6|same:password_confirmation',
        ]);


        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'dni' => $this->dni,
            'telefono' => $this->telefono,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

    return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.livewire');
    }
}
