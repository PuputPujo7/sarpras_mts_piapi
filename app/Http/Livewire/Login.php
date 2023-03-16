<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email;
    public $password;
    
    /**
     * login
     *
     * @return void
     */
    public function submit()
    {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        // if(
        //     User::attempt(
        //         ['email' => $this->email, 'password'=> $this->password])) {
            $user = User::where(['email' => $this->email, 'password'=> $this->password]);
                        // ['email' => $this->email, 'password'=> $this->password])) {
            return redirect('/add-barang');

        // } else {
        //     session()->flash('error', 'Alamat Email atau Password Anda salah!.');
        //     return redirect()->route('add-barang');
        // }
    }
    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.login');
    }
}
