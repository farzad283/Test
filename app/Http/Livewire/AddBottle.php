<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Livewire\WithFileUploads;
use Livewire\WithValidation;

use Livewire\Component;
use App\Models\Country;
use App\Models\Type;
use App\Models\UnlistedBottle;

class AddBottle extends Component
{
    use WithFileUploads;

    // variables pour le chargement du formulaire
    public $bottle;
    public $unlistedBottle;
    public $countries;
    public $types;

    // variables pour l'ajout d'une bouteille non listée
    public $name;
    public $description;
    public $price;
    public $country_id;
    public $type_id;
    public $format;
    public $vintage;
    public $image;
    public $url_image;

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'name.string' => 'Le champ nom doit être une chaîne de caractères.',
        'name.max' => 'Le champ nom ne doit pas dépasser :max caractères.',
        'description.max' => 'Le champ description ne doit pas dépasser :max caractères.',
        'price.number' => 'Le champ prix ne doit être un nombre.',
        'vintage.digits' => 'Le champ vintage doit être une année.',
        'image.mimes' => 'L\'image chargée doit être de type jpeg, jpg ou jpe.',
    ];

    public function mount($bottle = null)
    {
        $this->bottle = $bottle;
        $this->countries = Country::all();
        $this->types = Type::all();
    }

    public function render()
    {
        return view('livewire.add-bottle', ['bottle' => $this->bottle, 'countries' => $this->countries, 'types' => $this->types]);
    }

    public function saveUnlistedBottle()
    {
        // Validez les données d'entrée en fonction des règles définies dans $this->rules
        $validUnlistedBottle = $this->validate([
            'name' => 'required|string|max:200',
            'description' => 'string|max:200|nullable',
            'price' => 'numeric|nullable',
            'vintage' => 'nullable|digits:4',
            'format' => 'nullable',
            'country_id' => 'exists:countries,id|nullable',
            'type_id' => 'exists:types,id|nullable',
            'image' => 'mimes:png,jpeg,jpg,jpe|nullable'
        ]);

        logger($this->name);
        // transforme le champ Prix si la donnée est vide
        $validUnlistedBottle['price'] = $this->price ?: null;

        // Sauvegardez l'image dans le stockage et obtenez son chemin
        if ($this->image) {
            $imagePath = $this->image->store('bottle_images', 'public');
            $validUnlistedBottle['url_image'] = $imagePath;
        }

        // Créez une nouvelle instance de UnlistedBottle et remplissez-la avec les données validées
        $unlistedBottle = new UnlistedBottle($validUnlistedBottle);

        // Sauvegardez le nouvel enregistrement UnlistedBottle dans la base de données
        $unlistedBottle->save();

        // Effacez les champs du formulaire après une sauvegarde réussie
        $this->resetForm();
        // Facultativement, vous pouvez ajouter ici un message de succès ou toute autre action souhaitée
    }

    private function resetForm()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->country_id = null;
        $this->type_id = null;
        $this->format = '';
        $this->vintage = '';
        $this->image = null;
    }
}
