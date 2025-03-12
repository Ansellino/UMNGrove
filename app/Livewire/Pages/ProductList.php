<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('livewire.layouts.app')]
class ProductList extends Component
{
    use WithPagination;

    // Filter properties
    public $search = '';
    public $min_price = null;
    public $max_price = null;
    public $sort = '';

    // SEO metadata
    public $pageTitle = 'Our Products - Lembur Mangrove';
    public $metaDescription = 'Browse our selection of sustainable mangrove products from Patikang, supporting local communities and environmental conservation.';

    // For URL query parameters
    protected $queryString = [
        'search' => ['except' => ''],
        'min_price' => ['except' => ''],
        'max_price' => ['except' => ''],
        'sort' => ['except' => '']
    ];

    public function mount()
    {
        // Initialize properties from URL query parameters if available
        $this->search = request('search', $this->search);
        $this->min_price = request('min_price', $this->min_price);
        $this->max_price = request('max_price', $this->max_price);
        $this->sort = request('sort', $this->sort);
    }

    // Reset pagination when filters change
    public function updatingSearch() { $this->resetPage(); }
    public function updatingMinPrice() { $this->resetPage(); }
    public function updatingMaxPrice() { $this->resetPage(); }
    public function updatingSort() { $this->resetPage(); }

    public function resetFilters()
    {
        $this->reset(['search', 'min_price', 'max_price', 'sort']);
        $this->resetPage();
    }

    public function toggleFavorite($postId)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to login page
            return $this->redirect(route('login'), navigate: true);
        }
        $post = Post::findOrFail($postId);
        $user = Auth::user();

        if ($post->isFavoritedBy($user)) {
            $post->unfavorite($user);
        } else {
            $post->favorite($user);
        }
    }

    public function render()
    {
        try {
            $query = Post::withCount('favoritedBy');

            // Search filter
            if ($this->search) {
                $searchTerm = strip_tags($this->search);
                $query->where('title', 'like', '%' . $searchTerm . '%');
            }

            // Price range filters
            if ($this->min_price !== null && $this->min_price !== '') {
                $minPrice = max(0, (float) $this->min_price);
                $query->where('price', '>=', $minPrice);
            }

            if ($this->max_price !== null && $this->max_price !== '') {
                $maxPrice = max(0, (float) $this->max_price);
                $query->where('price', '<=', $maxPrice);
            }

            // Sort options
            if ($this->sort) {
                $query = match($this->sort) {
                    'price_asc' => $query->orderBy('price', 'asc'),
                    'price_desc' => $query->orderBy('price', 'desc'),
                    'latest' => $query->latest(),
                    default => $query->latest()
                };
            } else {
                $query = $query->latest();
            }

            $posts = $query->paginate(9);

            return view('livewire.pages.product-list', [
                'posts' => $posts
            ]);

        } catch (QueryException $e) {
            session()->flash('error', 'An error occurred while fetching products.');
            return view('livewire.pages.product-list', [
                'posts' => collect()
            ]);
        }
    }
}
