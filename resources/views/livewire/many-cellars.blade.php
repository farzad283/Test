<div>
    <h2 class="text-2xl font-bold mb-4">Cellars</h2>

    @error('cellars')
        <div class="text-red-500">{{ $message }}</div>
    @enderror

    <livewire:cellar-search wire:loading.attr="disabled" />

    <a href="{{ route('add-cellar') }}" 
          class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                         @livewire('button', ['label' => 'Créer cellier'])
    </a>

    <div class="grid grid-cols-3 gap-4 max-w-3xl mx-auto">
        @if ($cellars->isEmpty())
            <p class="text-center">Aucune cellier trouvée.</p>
        @else
            @foreach ($cellars as $cellar)
            <a href="{{ route('singleCellar', ['cellar_id' => $cellar->id]) }}" class="col">
                <div class="col">
                    <div class="card-body mb-4 text-center border-10 border-gray-300 rounded-lg" style="margin-right: 1rem;">
                        <p class="card-title text-xl font-bold mb-2">ID: {{ $cellar->id }}</p>
                        <p class="mb-4">Name: {{ $cellar->name }}</p>
                        <p class="mb-4">Created At: {{ $cellar->created_at }}</p>
                        <p class="mb-4">Updated At: {{ $cellar->updated_at }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        @endif

        @if ($cellars->isEmpty() && !empty($search))
            <p class="text-center">Aucune cellier trouvée pour le terme de recherche "{{ $search }}".</p>
        @endif
    </div>
</div>
