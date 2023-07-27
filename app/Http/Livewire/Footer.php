<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.footer');
    }

    public function redirectToAddBottle()
    {
        $url = route('add-bottle');
        return redirect($url);
    }

    public function redirectToCellars()
    {
        $url = route('cellars');
        return redirect($url);
    }

    public function redirectToWishlist()
    {
        $url = route('wishlist');
        return redirect($url);
    }

    public function redirectToBottleSearch()
    {
        return redirect()->route('bottle-search');
    }
}

