<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;

    public function render()
    {
        return view('livewire.image-upload');
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024', // Example validation rules (image and max size of 1MB)
        ]);
    }
}
