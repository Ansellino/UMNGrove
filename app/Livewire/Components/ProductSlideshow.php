<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ProductSlideshow extends Component
{
    // Component properties - can be passed when using the component
    public $totalImages = 8;
    public $visibleImages = 4;
    public $rotationSpeed = 3000; // milliseconds
    public $baseUrl = 'images1';
    public $identifier = 'product-slideshow'; // ID for the DOM element
    public $height = 'h-48 sm:h-56'; // Configurable image height classes

    // Alpine data properties and methods
    public $alpineData;

    public function mount()
    {
        // We set this up in mount() so we can use component properties in Alpine code
        $this->alpineData = [
            'totalImages' => $this->totalImages,
            'visibleImages' => $this->visibleImages,
            'positions' => [0, 1, 2, 3], // Starting positions
            'slideInterval' => null,
            'baseUrl' => asset($this->baseUrl),
            'rotationSpeed' => $this->rotationSpeed,
            'elementId' => $this->identifier,
        ];
    }

    public function render()
    {
        return view('livewire.components.product-slideshow');
    }
}
