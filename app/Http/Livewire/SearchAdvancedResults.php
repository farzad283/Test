<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bottle;

use Illuminate\Pagination\LengthAwarePaginator;

class SearchAdvancedResults extends Component
{
    use WithPagination;

    public $results = [];
    public $component = 'bottles';
    protected $bottles = [];

    protected $queryString = ['search', 'priceMin', 'priceMax', 'description', 'page'];

    public $search;
    public $priceMin;
    public $priceMax;
    public $description;

    protected $listeners = ['searchPerformance' => 'performSearch'];

    public function mount()
    {
        $this->search = request()->query('search', null);
        $this->priceMin = request()->query('priceMin', 0);
        $this->priceMax = request()->query('priceMax', 0);
        $this->description = request()->query('description', null);
        $this->loadBottles();
    }
    
    public function performSearch()
    {
        $this->loadBottles();
    }
    
    public function loadBottles()
    {
        $query = Bottle::query();

        // Apply search filters
        if ($this->search && $this->search !== 'null') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        if ($this->description && $this->description !== 'null') {
            $query->where('description', 'LIKE', '%' . $this->description . '%');
        }

        if ($this->priceMin && $this->priceMin !== 'null') {
            $query->where('price', '>=', $this->priceMin);
        }

        if ($this->priceMax && $this->priceMax !== 'null') {
            $query->where('price', '<=', $this->priceMax);
        }

        // Fetch all bottles without pagination
        $this->bottles = $query->get();
    }

    public function getBottlesProperty()
    {
        return $this->bottles;
    }

    public function render()
    {
        return view('livewire.many-bottles', ['bottles' => $this->bottles]);
    }

    public function searchPerformed($search)
    {
        $this->search = $search;
        $this->loadBottles();
    }
    
}

