<div>
    <x-slot:title>Advent of Dev</x-slot>

    <div class="advent-calendar">
        @foreach ($gifts as $gift)
            <livewire:gift :gift="$gift" :opened="$openedGiftNames->contains($gift->name)" :key="$gift->name">
        @endforeach
    </div>
</div>
