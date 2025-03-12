<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.app')]
class Contact extends Component
{
    // Meta information for the page
    public $title = 'Contact Us - Lembur Mangrove';
    public $metaDescription = 'Get in touch with Lembur Mangrove in Patikang Village. Find our location, contact details, and operating hours.';

    // Contact information
    public $phone = '+62 817-849-463';
    public $contactName = 'Deden';
    public $hours = 'Mon-Fri, 8:00-22:00';
    public $address = [
        'line1' => 'Kp Patikang, Citereup Village,',
        'line2' => 'Panimbang, Pandeglang Banten',
        'line3' => 'Indonesia'
    ];

    // Map URL
    public $mapEmbedUrl = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253559.15326835306!2d105.85396144379884!3d-6.57743602150195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4201eeabf521df%3A0x3d0e91b6a9024051!2sPandeglang%20Regency%2C%20Banten!5e0!3m2!1sen!2sid!4v1715237599080!5m2!1sen!2sid';

    // WhatsApp link
    public $whatsAppLink;

    public function mount()
    {
        // Format phone number for WhatsApp link (remove spaces and format)
        $cleanPhone = preg_replace('/[^0-9]/', '', $this->phone);
        $this->whatsAppLink = "https://wa.me/{$cleanPhone}";
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}
