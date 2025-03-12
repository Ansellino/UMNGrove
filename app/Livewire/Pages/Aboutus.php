<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.app')]
class Aboutus extends Component
{
    // SEO metadata
    public $pageTitle = 'About Us - Lembur Mangrove';
    public $metaDescription = 'Learn about Lembur Mangrove tourism village in Patikang, our vision, journey, and what we offer to visitors.';

    // Operating hours data
    public $operatingHours = [
        [
            'days' => 'Monday - Thursday',
            'hours' => '08.00 - 17.00',
            'status' => 'open',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'days' => 'Saturday - Sunday',
            'hours' => '08.00 - 17.00',
            'status' => 'open',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'days' => 'Friday',
            'hours' => 'Closed',
            'status' => 'closed',
            'icon' => 'M6 18L18 6M6 6l12 12'
        ],
    ];

    // Offerings data
    public $offerings = [
        [
            'title' => 'Mangrove Exploration',
            'description' => 'Take a guided tour to explore the mangrove forest, learn about its biodiversity and understand the importance of mangrove conservation.',
            'image' => 'ABOUT/WWO1.jpg'
        ],
        [
            'title' => 'Ocean Adventure',
            'description' => 'Experience thrilling water activities including snorkeling, beach exploration, and traditional fishing techniques in pristine waters.',
            'image' => 'ABOUT/WWO2.jpg'
        ],
        [
            'title' => 'Educational Experience',
            'description' => 'Join our interactive workshops on mangrove ecology, local culture, and sustainable practices. Perfect for students and nature enthusiasts.',
            'image' => 'ABOUT/WWO3.jpg'
        ],
    ];

    public function render()
    {
        return view('livewire.pages.aboutus');
    }
}
