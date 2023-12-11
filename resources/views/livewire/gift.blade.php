<div class="gift-border-wrap">
    <div class="gift">
        <h3>{{ date('d', strtotime($gift->date)) }}</h3>
        <hr class="solid">
        @if ($gift->date <= date('Y-m-d'))
            @if (!$opened)
                <button class="btn-unwrap" wire:click="open()">Unwrap!</button>
            @else
                <p class="text-gift">{{ $gift->description }}</p>
            @endif
        @else
            <p class="text-gift">You can't open this yet.</p>
        @endif
    </div>
</div>
