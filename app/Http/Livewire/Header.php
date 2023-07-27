<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $user;
    public function render()
    {
        $this->user = auth()->user(); // pour avoir acces au données de l'utilisateur connecté 
        // Si on veut ajouter des choses par exemple les bouteilles vu ou peu immporte session()->put('ma_variable', $maValeur)
        return view('livewire.header');
    }

    
    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->to('login');
    }
}
