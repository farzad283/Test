<div>
    <div style="position: relative;">
        <input type="text" wire:model="search" wire:keydown="fetchResults" placeholder="Search..." class="border border-gray-300 rounded py-2 px-4 mb-2">
        <button class="bg-red hover:bg-dark-red text-white font-bold py-2 px-4 border border-dark-red rounded" wire:click="handleSearch">Search</button>
        @if($showDropdown && !empty($results))
            <ul style="position: absolute; top: 100%; left: 0; z-index: 999; background-color: pale-pink; border: 1px solid gold; border-radius: 4px; width: 250px; padding: 0;">
                @foreach($results as $result)
                    <li wire:click="selectResult('{{ $result }}')" class="p-2">{{ $result }}</li>
                    <hr style="border-top: 1px solid gold; margin: 0;">
                @endforeach
            </ul>
        @endif
    </div>
</div>
