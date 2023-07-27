<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bottle;
use App\Models\UnlistedBottle;
use Livewire\WithPagination;

class ManyBottles extends Component
{
    use WithPagination;

    public $filter = true;
    public $search = '';
    public $showSearch = false; 

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }


    public function render()
    {
        
        if ($this->filter){
            $bottles = Bottle::query();
        }else{
            $bottles = UnlistedBottle::query();
        }
        if (!empty($this->search)) {
            $bottles->where(function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('description', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('code_saq', 'LIKE', $this->search . '%');
                if (is_numeric($this->search)) {
                    $query->orWhere(function ($query) {
                        $query->where('price', '>=', (float)$this->search)
                              ->where('price', '<', (float)$this->search + 1);
                    });
                }
            });
        }

        $bottles = $bottles->orderBy('name')->paginate(9);

        return view('livewire.many-bottles', ['bottles' => $bottles,'filter' => $this->filter])->layout('layouts.app');
    }
    
    protected $listeners = ['toggleSearch', 'searchPerformed' => 'performSearch', 
    'Filter'=> 'FilterBottles'];

    public function performSearch($searchTerm)
    {
        $this->search = $searchTerm;
        $this->resetPage();  // Reset the current page to 1 after each search
    }

    public function toggleSearch()
    {
        $this->showSearch = !$this->showSearch; // Toggle the visibility
    }

    public function FilterBottles($newFilter)
{
    $this->filter = $newFilter;
    $this->resetPage();
}

}
