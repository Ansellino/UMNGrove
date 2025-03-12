<?php

namespace App\Livewire\Pages;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class NewsList extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'latest';

    // SEO metadata
    public $pageTitle = 'News & Updates - Lembur Mangrove';
    public $metaDescription = 'Stay updated with the latest news, articles, and updates from Lembur Mangrove Patikang.';

    // For URL query parameters
    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'latest']
    ];

    public function updatingSearch()
    {
        // Reset pagination when search changes
        $this->resetPage();
    }

    public function updatingSort()
    {
        // Reset pagination when sort changes
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort']);
        $this->resetPage();
    }

    public function render()
    {
        $news = News::query()
            ->when($this->search, function($query) {
                $searchTerm = '%' . $this->search . '%';
                return $query->where(function($q) use ($searchTerm) {
                    $q->where('title', 'like', $searchTerm)
                      ->orWhere('content', 'like', $searchTerm);
                });
            })
            ->when($this->sort === 'latest', function($query) {
                return $query->latest('created_at');
            })
            ->when($this->sort === 'oldest', function($query) {
                return $query->oldest('created_at');
            }, function($query) {
                return $query->latest('created_at');
            })
            ->paginate(8);

        return view('livewire.pages.news-list', [
            'news' => $news
        ]);
    }
}
