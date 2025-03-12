<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.app')]
class ResearchDedication extends Component
{
    // SEO metadata
    public $pageTitle = 'Research & Dedication - Lembur Mangrove';
    public $metaDescription = 'Research & Community Service opportunities for the Mangrove World at Lembur Mangrove Patikang.';

    // Contact details
    public $whatsappNumber = '62817849463';
    public $whatsappLink;
    public $email = 'hello@lemburmangrove.com';

    public function mount()
    {
        // Prepare the WhatsApp link with the phone number
        $this->whatsappLink = "https://wa.me/{$this->whatsappNumber}";
    }

    public function render()
    {
        return view('livewire.pages.research-dedication');
    }
}
