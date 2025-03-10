<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class Footer extends Component
{
    public $currentYear;
    public $quickLinks = [];
    public $socialLinks = [];

    public function mount()
    {
        $this->currentYear = date('Y');

        $this->quickLinks = [
            ['route' => 'posts.index', 'label' => 'Tour Packages'],
            ['route' => 'aboutus', 'label' => 'About'],
            ['route' => 'contact', 'label' => 'Contact'],
        ];

        $this->socialLinks = [
            [
                'name' => 'Instagram',
                'url' => "https://instagram.com/lemburmangrove",
                'icon' => 'instagram',
            ],
            [
                'name' => 'Facebook',
                'url' => 'https://facebook.com/lemburmangrove',
                'icon' => 'facebook',
            ],
            [
                'name' => 'Twitter',
                'url' => 'https://twitter.com/lemburmangrove',
                'icon' => 'twitter',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.layout.footer');
    }
}
