<div style="margin-left: 40px; margin-bottom:30px; margin-top:20px;">
    <div style="position: relative;">
        <input type="text" wire:model="search" wire:keydown="fetchResults" placeholder="Search..." class="border border-gray-300 rounded py-2 px-4 mb-2">
        <button class="bg-red hover:bg-dark-red text-white font-bold py-2 px-4 border border-dark-red rounded" wire:click="handleSearch">Search</button>
        <a href="{{ route('bottle-advanced-form') }}" style="display: flex; align-items: center; text-decoration: none;">
        <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" /></svg> </a>     
         @if(!empty($results))
            <div style="position: absolute; top: 100%; left: 0; z-index: 10; background-color: white; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                <ul style="list-style: none; padding: 0;">
                    @foreach($results as $result)
                        <li wire:click="selectResult('{{ $result['name'] }}')" style="padding: 10px; border-bottom: 1px solid #ccc;">
                            {{ $result['name'] }} - {{ $result['description'] }} - {{ $result['price'] }} - {{ $result['code_saq'] }}
                        </li>
                    @endforeach
                </ul>
                @if(count($results) >= 10) <!-- This checks if there are more than 10 items. Adjust the number as needed. -->
                    <button wire:click="loadMore" style="margin-top: 10px; background-color: #9B0738; color: white; border: none; padding: 8px 16px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 4px;">Load more</button>
                @endif
            </div>
        @endif
    </div>
</div>

