<?php
namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            $this->addError('email', 'Credenciales incorrectas');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.livewire');
    }
}
