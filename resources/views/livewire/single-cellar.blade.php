<div class="p-6 h-screen">
    <h1 class="text-3xl font-bold mb-4">{{ $cellar->name }}</h1>
    <h2 class="text-xl font-semibold mb-2">Bouteilles:</h2>
    <ul class="grid grid-cols-1 gap-4">
        <a href="{{ route('bottles') }}"  class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
            @livewire('button', ['label' => 'Ajouter bottles'])
        </a>
        @foreach($cellar->bottles as $bottle)
            <li class="bg-white p-4 shadow-md rounded-md flex justify-around items-center">
                <div>
                    @livewire('single-bottle', ['bottle_id' => $bottle->id])
                </div>
                <div class="flex flex-col p-3 space-y-2.5 items-center ">
                    <p class="text-sm text-gray-500 mb-4">Quantité: {{ $bottle->pivot->quantity }}</p>
                    <div class="flex items-center space-x-2 mb-4">
                        <button wire:click="increment({{ $bottle->id }})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <button  wire:click="decrement({{$bottle->id}})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                        </button>
                        

                    </div>
                    
                    <a href="{{ route('update_bottle', ['cellar_id' => $cellar->id,'bottle_id' => $bottle->id]) }}"  class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                         @livewire('button', ['label' => 'modifier cellier'])
                    </a>

                    <div class="py-2">
                   
                      @livewire('delete-bottle', ['bottleId' =>$bottle->id, 'cellarId' => $cellar->id])

                    </div>
                </div>
             
            </li>
        @endforeach
    </ul>
</div>

</div>




