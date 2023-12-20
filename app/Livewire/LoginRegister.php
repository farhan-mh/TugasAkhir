<?php

namespace App\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;
    public function render()
    {
        return view('livewire.login-register');
    }
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
    public function login(){
        $validateData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(\Auth::attemp(['email' => $this->email,'password' => $this->password])){
            session()->flash('message','Login sukses');
        }else{
            session()->flash('error','Login Gagal');
        }
    }
    public function register(){
        $this->registerForm = !$this->registerForm;
    }
    public function registerStore(){
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $this->password = Hash::make($this->password);

        User::create(['name' => $this->name,'email' => $this->email, 'password' => $this->password]);
        session()->flash('message','registrasi berhasil');

        $this->resetInputFields();
    }
}
