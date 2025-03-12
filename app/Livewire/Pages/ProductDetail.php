<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class ProductDetail extends Component
{
    public Post $post;

    // SEO metadata
    public $pageTitle;
    public $metaDescription;

    // Status flags
    public $isFavorite = false;
    public $favoriteCount = 0;

    // Dynamic content
    public $whatsappMessage;

    // Mount method to initialize data
    public function mount(Post $post)
    {
        $this->post = $post;

        // Set SEO info
        $this->pageTitle = $post->title . ' - Lembur Mangrove Products';
        $this->metaDescription = substr(strip_tags($post->content), 0, 160);

        // Initialize favorite status
        $this->updateFavoriteStatus();

        // Prepare WhatsApp message
        $this->whatsappMessage = "Hello, I'm interested in purchasing: {$post->title} (Rp " .
            number_format($post->price, 0, ',', '.') . "). Could you provide more information?";
    }

    // Update favorite status
    private function updateFavoriteStatus()
    {
        $this->favoriteCount = $this->post->favoritedBy()->count();
        $this->isFavorite = Auth::check() ? $this->post->isFavoritedBy(Auth::user()) : false;
    }

    // Toggle favorite status
    public function toggleFavorite()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if ($this->post->isFavoritedBy($user)) {
            $this->post->unfavorite($user);
        } else {
            $this->post->favorite($user);
        }

        $this->updateFavoriteStatus();
    }

    // Generate WhatsApp URL
    public function getWhatsappUrlProperty()
    {
        $encodedMessage = urlencode($this->whatsappMessage);
        return "https://wa.me/62817849463?text={$encodedMessage}";
    }

    // Render the view
    public function render()
    {
        return view('livewire.pages.product-detail');
    }
}
