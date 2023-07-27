<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #9B0738; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); width: 400px;">
         @if ($errorMessage)
            <div style="background-color: yellow; color: #9B0738; padding: 10px; border-radius: 4px; margin-bottom: 15px; text-align: center;">{{ $errorMessage }}</div>
        @endif
        <form style="display: flex; flex-direction: column;" wire:submit.prevent="handleSearch">
            <label for="name" style="margin-bottom: 10px; color: white;">Nom:</label>
            <input style="padding: 5px; margin-bottom: 15px; width: 100%; border-radius: 4px; border: 1px solid #FB7F6; color: #FB7F6;" wire:model="search" type="text" placeholder="Nom...">

            <label for="description" style="margin-bottom: 10px; color: white;">Pays:</label>
            <input style="padding: 5px; margin-bottom: 15px; width: 100%; border-radius: 4px; border: 1px solid #FB7F6; color: #FB7F6;" wire:model="description" id="description" type="text" placeholder="Pays...">

            <label for="priceMin" style="margin-bottom: 10px; color: white;">Prix minimum:</label>
            <input style="padding: 5px; margin-bottom: 15px; width: 100%; border-radius: 4px; border: 1px solid #FB7F6; color: #FB7F6;" wire:model="priceMin" type="number" placeholder="Prix minimum...">

            <label for="priceMax" style="margin-bottom: 10px; color: white;">Prix maximal:</label>
            <input style="padding: 5px; margin-bottom: 30px; width: 100%; border-radius: 4px; border: 1px solid #FB7F6; color: #FB7F6;" wire:model="priceMax" type="number" placeholder="Prix maximal...">

            <button style="padding: 10px; width: 100%; background-color: #927A50; color: white; font-weight: bold; border: none; border-radius: 4px; cursor: pointer;" wire:click="handleSearch">Recherche</button>
        </form>
    </div>
</div>

