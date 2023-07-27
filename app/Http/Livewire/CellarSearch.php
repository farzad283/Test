<?php

namespace App\Http\Livewire;

use App\Models\Cellar;
use Livewire\Component;

class CellarSearch extends Component
{
    public $search = '';
    public $results = [];
    public $showDropdown = false;

    public function fetchResults()
    {
        if (!empty($this->search)) {
            $this->results = Cellar::where('name', 'LIKE', '%' . $this->search . '%')->pluck('name')->toArray();
            $this->showDropdown = true;
        } else {
            $this->results = [];
            $this->showDropdown = false;
        }
    }
    

    public function selectResult($result)
    {
        $this->search = $result;
        $this->results = [];
    }

    public function handleSearch()
    {
        $this->emit('searchPerformed', $this->search);
        $this->results = []; // Clear the search results
        $this->search = ''; // Clear the search input
    }
    




    public function render()
    {
        return view('livewire.cellar-search');
    }
}
