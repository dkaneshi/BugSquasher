<div class="p-4">
    <div class="flex items-center justify-center">
        <flux:heading size="lg">{{ $count }}</flux:heading>
    </div>

    <div class="flex items-center justify-center mt-4">
        <flux:button wire:click="increment">+</flux:button>

        <flux:button wire:click="decrement">-</flux:button>
    </div>
</div>
