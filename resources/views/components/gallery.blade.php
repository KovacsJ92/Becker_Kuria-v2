<x-section>
    <div class="flex overflow-x-auto">
        @foreach ($this->images as $img)
    
            <img wire:click="showImageModal('{{ $img->slug }}')" class="mr-10"
                src="images/{{ $img->slug }}.png" height="640" width="860" alt="Bhutan">
    
        @endforeach
    </div>
    
    
    <x-modals.image wire:model="showImage" :maxWidth="'6xl'">
        <x-slot name="content">
            <img src="images/{{ $this->showImage }}.png" alt="Bhutan">
        </x-slot>
    </x-modals.image>
</x-section>