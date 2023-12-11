<?php

namespace App\Livewire;

use App\Models\Gift as GiftModel;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Livewire\Component;

class Gift extends Component
{
    public GiftModel $gift;

    public bool $opened;

    public function open(): void
    {
         $this->opened = true;
         $this->dispatch('gift-opened', giftName: $this->gift->name);
    }

    public function render(): View|Factory
    {
        return view('livewire.gift', [
            'gift' => $this->gift,
            'opened' => $this->opened,
        ]);
    }
}
