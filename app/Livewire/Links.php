<?php

namespace App\Livewire;

use App\Models\Link;
use Illuminate\View\View;
use Livewire\Component;

class Links extends Component
{
    public function render(): View
    {
        return view('livewire.links', [
            'links' => auth()->user()->links()->ordered()->paginate(2)
        ]);
    }

    public function updateOrder(array $order): void
    {
        Link::setNewOrder($order, 1, 'id', function ($query) {
            $query->whereBelongsTo(auth()->user());
        });
    }
}
