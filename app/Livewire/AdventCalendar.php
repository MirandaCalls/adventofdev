<?php

namespace App\Livewire;

use App\Models\Gift;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class AdventCalendar extends Component
{
    public Collection $gifts;

    public SupportCollection $openedGiftNames;

    public function mount(): void
    {
        $this->gifts = Gift::all();
        $this->openedGiftNames = collect(Session::get('openedGiftNames', []));
    }

    #[On('gift-opened')]
    public function openGift(string $giftName): void
    {
        if (Gift::whereName($giftName)->exists()) {
            $this->openedGiftNames->push($giftName);
            Session::put('openedGiftNames', $this->openedGiftNames->toArray());
        }
    }

    public function render(): View|Factory
    {
        return view('livewire.advent-calendar', [
            'gifts' => $this->gifts,
            'openedGiftNames' => $this->openedGiftNames,
        ]);
    }
}
