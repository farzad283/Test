<div class="flex justify-center items-center h-screen">
   <div class="w-full max-w-sm p-4 bg-white shadow-lg rounded-lg">
      @if (session()->has('message'))
      <div class="mb-4 text-green-500">{{ session('message') }}</div>
      @endif
      @if (session()->has('message-error'))
      <div class="mb-4 text-red">{{ session('message-error') }}</div>
      @endif
      <form wire:submit.prevent="store">
         @csrf

         <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity :</label>
            <input type="number" min="1" wire:model="quantity" id="quantity" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500">
            @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
         </div>
         <div class="mb-4">
            <label for="cellar" class="block text-sm font-medium text-gray-700">Select Cellar</label>
            <select wire:model="cellar_id" id="cellar" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500">
               @foreach ($cellars as $cellar)
               <option value="{{ $cellar->id }}">{{ $cellar->name }}</option>
               @endforeach
            </select>
         </div>

         <button type="submit" class="w-full px-4 py-2 mt-4 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Envoyer Nouvelle Bottle
         </button>       
      </form>
      <a href="{{ route('cellars') }}" class="py-2">
                         @livewire('button', ['label' => 'returner au cellars'])
         </a>
   </div>
</div>

