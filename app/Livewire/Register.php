<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{   
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    
    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed'
        ]);

        $user = User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => bcrypt($this->password)
        ]);

        if($user) {
            session()->flash('success', 'Register Berhasil!.');
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
