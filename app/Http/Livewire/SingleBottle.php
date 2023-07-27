<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bottle;

class SingleBottle extends Component
{
    public $bottleId;
    public $bottle;

    // Handle the passed parameter
    public function mount($bottle_id)
    {
        $this->bottleId = $bottle_id;
    }

    

    public function render()
    {
        //Exemple, tu peux l'utiliser où tu en as de besoin pour accéder à l'id c'est $cellar['id'] et le nom $cellar['name']
        $cellar=session('cellar_inf');
        $this->bottle = Bottle::find($this->bottleId);

        return view('livewire.single-bottle', ['bottle' => $this->bottle]);
    }
}

