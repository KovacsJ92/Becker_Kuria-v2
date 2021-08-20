<?php

namespace App\Http\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    public $images = [];
    public $showImage;

    public function mount() 
    {
        $this->images = ModelsGallery::where('extension', 'webp')
            ->orderBy('order')
            ->get();
    }

    public function render()
    {
        return view('livewire.gallery');
    }

    public function showImageModal($slug)
    {
        $this->showImage = $slug;
    }
}
