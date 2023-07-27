<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bottle;
use App\Models\Cellar;
use App\Models\BottleInCellar;

class UpdateBottle extends Component
{
    public $bottle_id, $cellar_id, $quantity, $bottle, $old_cellar_id;

    public function mount($cellar_id, $bottle_id)
    {
        $this->bottle_id = $bottle_id;
        $this->cellar_id = $cellar_id;
        $this->old_cellar_id = $cellar_id;

        $bottleInCellar = BottleInCellar::where('cellar_id', $this->cellar_id)
            ->where('bottle_id', $this->bottle_id)->first();

        if ($bottleInCellar) {
            $this->quantity = $bottleInCellar->quantity;
        }

        $this->bottle = Bottle::findOrFail($bottle_id);
    }

    public function store()
    {
        $bottleInCellar = BottleInCellar::where('bottle_id', $this->bottle_id)
            ->where('cellar_id', $this->old_cellar_id)
            ->first();

        if ($bottleInCellar) {
            $bottleInCellar->quantity = $this->quantity;
            $bottleInCellar->cellar_id = $this->cellar_id;
            $bottleInCellar->save();

            $this->old_cellar_id = $this->cellar_id;
            session()->flash('message', 'Bottle updated successfully.');
        }
    }

    public function render()
    {
        $cellars = Cellar::all();
        return view('livewire.update-bottle', ['cellars' => $cellars]);
    }
}
