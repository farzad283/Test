<div>
<div class="flex items-center space-x-2 mb-4">
<button wire:click="$emit('Filter', true)" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
    Listée
</button>
<button wire:click="$emit('Filter', false)" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
    Non-Listée
</button>

                        

                    </div>
    <div class="my-12 ">
        @if ($showSearch)
            @livewire('bottle-search')
        @endif
        @if (!$filter)
            <a href="{{ route('add-bottle') }}"  class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                @livewire('button', ['label' => 'Ajouter nouvelle bouteille'])
            </a>
        @endif

        <div class="max-w-1200px">
            @foreach($bottles as $bottle)
            <article class="relative mx-6 my-2 flex border-2 border-gold rounded-3xl items-center gap-2 mb-12">
                <img src="{{ $bottle->image }}" alt="{{ $bottle->name }}" class="max-w-80 relative bottom-3 -mt-4 transform transition-transform duration-300 hover:scale-125 hover:brightness-80">
                <div class="flex flex-col justify-end items-left p-4 sm:flex-row sm:justify-between sm:gap-4">
                    <h1 class="text-left font-bold font-roboto">{{ $bottle->name }}</h1>
                    <p class="text-xs mt-2 mb-2">{{ $bottle->description }}</p>
                </div>
                @if (!$filter)
                <a href="{{ route('add-bottles-to-cellar', ['bottle_id' => $bottle->id, 'unliste'=>'unliste']) }}"  class="absolute bottom-2 right-3 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                         @livewire('button', ['label' => 'Ajouter'])
                    </a>
        @else
                <a href="{{ route('add-bottles-to-cellar', ['bottle_id' => $bottle->id,'unliste'=>'liste']) }}"  class="absolute bottom-2 right-3 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                         @livewire('button', ['label' => 'Ajouter'])
                    </a>
                    @endif
            </article>
       
            @endforeach
            @if ($bottles->count())
                <div class="col-span-2">
                    <div class="flex justify-center flex-col-reverse items-center">
                        <div class="text-sm text-gray-500 mb-2">
                            Affichage de {{ $bottles->firstItem() }} sur {{ $bottles->lastItem() }} of {{ $bottles->total() }} résultats
                        </div>

                        <div class="flex justify-center mb-2">
                            {{ $bottles->links() }}
                        </div>
                    </div>
                </div>
            @else
                <p>No bottles found.</p>
            @endif
        </div>
    </div>
</div>
