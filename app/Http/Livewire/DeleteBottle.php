<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BottleInCellar;

class DeleteBottle extends Component
{
    public $bottleId;
    public $cellarId;

    

    public function deleteBottle()
    {
        $bottleInCellar = BottleInCellar::where('bottle_id', $this->bottleId)
            ->where('cellar_id', $this->cellarId)
            ->first();

        if ($bottleInCellar) {
            $bottleInCellar->delete();
        }

        $this->emit('bottleDeleted');  // emit an event to notify that a bottle was deleted
    }

    public function render()
    {
        return view('livewire.delete-bottle');
    }
    
    protected $listeners = ['bottleDeleted' => 'handleBottleDeleted'];

    public function handleBottleDeleted()
    {
        session()->flash('message', 'Bottle successfully deleted.');
    }
}
