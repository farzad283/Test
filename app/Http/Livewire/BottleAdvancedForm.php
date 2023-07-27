<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bottle;

class BottleAdvancedForm extends Component
{
    public $search = '';
    public $results = [];
    public $priceMin = '';
    public $priceMax = '';
    public $name = '';
    public $description = '';
    public $errorMessage = '';
    
    public function handleSearch()
    {
        $parameters = [
            'search' => $this->search,
            'priceMin' => $this->priceMin,
            'priceMax' => $this->priceMax,
            'description' => $this->description,
        ];

        // Vérifie si au moins un champ est rempli
        if (empty($parameters['search']) && empty($parameters['priceMin']) && empty($parameters['priceMax']) && empty($parameters['description'])) {
            $this->errorMessage = 'Au moins un champ doit être rempli';
            return;
        }

        // Supprime les valeurs nulles ou vides du tableau de paramètres
        $parameters = array_filter($parameters, function ($value) {
            return !empty($value) || $value === 0;
        });

        // Remplissez les paramètres manquants avec leurs valeurs par défaut correspondantes
        $parameters = array_merge([
            'search' => 'null',
            'priceMin' => 'null',
            'priceMax' => 'null',
            'description' => 'null',
        ], $parameters);

        // Emit the event with search parameters
        $this->emitTo('search-advanced-results', 'searchPerformance', $parameters['search'], $parameters['priceMin'], $parameters['priceMax'], $parameters['description']);

        // Redirect to the search results page with the parameters
        return redirect()->route('search-advanced-results', $parameters);
    }


    public function render()
    {
        return view('livewire.bottle-advanced-form');
    }
}
