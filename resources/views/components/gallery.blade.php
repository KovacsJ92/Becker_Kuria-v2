<x-section>
    <div class="flex overflow-x-auto ml-10">
        @foreach ($this->images as $img)
    
            <img wire:click="showImageModal('{{ $img->slug }}')" class="mr-10 max-h-96 md:max-h-128"
                src="images/{{ $img->slug }}.webp" height="338" width="450" alt="Bhutan">
    
        @endforeach
    </div>
    
    
    <x-modals.image wire:model="showImage" :maxWidth="'6xl'">
        <x-slot name="content">
            <img src="images/{{ $this->showImage }}.webp" alt="Bhutan">
        </x-slot>
    </x-modals.image>
</x-section>