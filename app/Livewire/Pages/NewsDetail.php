<?php

namespace App\Livewire\Pages;

use App\Models\News;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class NewsDetail extends Component
{
    public News $newsItem;
    public $slug;

    // SEO metadata
    public $pageTitle;
    public $metaDescription;

    // Social share URLs
    public $facebookShareUrl;
    public $twitterShareUrl;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadNewsItem();

        if (!$this->newsItem) {
            return redirect()->route('news.index');
        }

        // Set SEO metadata
        $this->pageTitle = $this->newsItem->title . ' - Lembur Mangrove News';
        $this->metaDescription = substr(strip_tags($this->newsItem->content), 0, 160);

        // Generate social share URLs
        $currentUrl = url()->current();
        $this->facebookShareUrl = "https://www.facebook.com/sharer/sharer.php?u={$currentUrl}";
        $this->twitterShareUrl = "https://twitter.com/intent/tweet?url={$currentUrl}&text=" . urlencode($this->newsItem->title);
    }

    protected function loadNewsItem()
    {
        $this->newsItem = News::where('slug', $this->slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.news-detail');
    }
}
