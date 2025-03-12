<?php
// filepath: c:\Users\AnselZorro\Desktop\Thesis\Portofolio\Projectan\patikang\app\Livewire\Pages\CsrProgram.php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.app')]
class CsrProgram extends Component
{
    // SEO metadata properties
    public $pageTitle = 'CSR Programs - Lembur Mangrove';
    public $metaDescription = 'Corporate Social Responsibility initiatives and collaboration opportunities at Lembur Mangrove Patikang.';

    // Programs data - this could come from a database in the future
    public $programs = [
        [
            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            'title' => 'Community Empowerment',
            'description' => 'Skills training, local business funding, and mangrove-based product development.',
            'color' => 'text-orange-500',
            'animation' => 'animate-bounce'
        ],
        [
            'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
            'title' => 'Environmental Education',
            'description' => 'Educational programs for children and communities to raise awareness of ecosystem conservation.',
            'color' => 'text-blue-500',
            'animation' => 'animate-pulse'
        ],
        [
            'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
            'title' => 'Village Infrastructure',
            'description' => 'Support for public facilities that improve the quality of life of the surrounding community.',
            'color' => 'text-gray-500',
            'animation' => 'animate-[bounce_3s_ease-in-out_infinite]'
        ],
        [
            'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
            'title' => 'Mangrove Conservation',
            'description' => 'Mangrove planting to protect the coast, improve environmental quality, and mitigate tsunami disasters.',
            'color' => 'text-green-500',
            'animation' => ''
        ]
    ];

    public function render()
    {
        return view('livewire.pages.csr-program');
    }
}
