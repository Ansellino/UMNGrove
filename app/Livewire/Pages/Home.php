<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.app')]
class Home extends Component
{
    // SEO metadata
    public $pageTitle = 'Lembur Mangrove Patikang - Ecological Tourism Village';
    public $metaDescription = 'Discover Lembur Mangrove Patikang, an ecological tourism village promoting conservation and local community empowerment.';

    // Contact information
    public $contactName = 'Deden';
    public $contactPhone = '+62 817-849-463';
    public $operatingHours = 'Monday - Friday, 8:00 - 22:00';
    public $location = [
        'line1' => 'Patikang Village, Citereup Village',
        'line2' => 'Panimbang, Pandeglang',
        'line3' => 'Banten, Indonesia'
    ];

    // Partners data - this could come from a database in the future
    public $partners = [];

    // Local Growth initiatives
    public $initiatives = [
        [
            'title' => 'Tour Packages',
            'description' => 'Overtime Mangrove Tour Package with the concept of educational tourism, ecology that is sustainable for the socio-economy and environment.',
            'route' => 'news.index',
            'image' => 'HOME/local/tour-packages.jpg'
        ],
        [
            'title' => 'Mangrove Products',
            'description' => 'Buying products produced from mangrove plants other than wood can improve the economy of local communities.',
            'route' => 'posts.index',
            'image' => 'HOME/local/mangrove-products.jpg'
        ],
        [
            'title' => 'CSR Programs',
            'description' => 'Program CSR perusahaan dalam perlindungan lingkungan di pesisir yang dapat meningkatkan daya beli masyarakat sekitar.',
            'route' => 'csrprogram',
            'image' => 'HOME/local/csr.png'
        ],
        [
            'title' => 'Research and Dedication',
            'description' => 'Academic research and service are needed in the sustainability of the lives of local people.',
            'route' => 'researchdedication',
            'image' => 'HOME/local/research.jpg'
        ],
    ];

    // Registration steps
    public $registrationSteps = [
        [
            'number' => 1,
            'title' => 'Select Package',
            'description' => 'Browse and choose your preferred tour package or product from our curated offerings',
            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
        ],
        [
            'number' => 2,
            'title' => 'Contact Us',
            'description' => 'Reach out via WhatsApp:',
            'whatsapp' => '6281784946301',
            'whatsappDisplay' => '0817849463 (Deden)',
            'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'
        ],
        [
            'number' => 3,
            'title' => 'Submit Details',
            'description' => 'Provide your full name and the package/product you\'re interested in purchasing',
            'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ],
        [
            'number' => 4,
            'title' => 'Complete Payment',
            'description' => 'Scan the provided QRIS code to complete your payment securely and instantly',
            'icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z'
        ],
    ];

    // Products data
    public $totalProducts = 8;
    public $visibleProducts = 4;
    public $productPositions = [0, 1, 2, 3]; // Current product positions (0-based index)

    public function mount()
    {
        // Initialize partners data
        for ($i = 1; $i <= 5; $i++) {
            $this->partners[] = [
                'logo' => "HOME/LOGO{$i}.png",
                'alt' => "Partner Logo {$i}"
            ];
        }
    }

    public function render()
    {
        return view('livewire.pages.home');
    }
}
