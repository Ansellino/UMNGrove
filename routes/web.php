<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResearchDedicationController;
use App\Livewire\Pages\Aboutus;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\CsrProgram;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\NewsDetail;
use App\Livewire\Pages\NewsList;
use App\Livewire\Pages\ProductDetail;
use App\Livewire\Pages\ProductList;
use App\Livewire\Pages\ResearchDedication;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
//Route::view('/', 'welcome')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    // Redirect dashboard to posts index
    Route::get('/dashboard', function () {
        return redirect()->route('posts.index');
    })->name('dashboard');

    // Posts routes
    Route::resource('posts', ProductList::class);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/posts/{post}/favorite', [ProductList::class, 'toggleFavorite'])
        ->name('posts.favorite');
});

Route::get('/posts', ProductList::class)->name('posts.index');
Route::get('/posts/{post}', ProductDetail::class)->name('posts.show');


//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/news', NewsList::class)->name('news.index');
Route::get('/news/{slug}', NewsDetail::class)->name('news.show');

//Route::get('/news', [NewsController::class, 'index'])->name('news.index');
//Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/aboutus', Aboutus::class)->name('aboutus');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/csr-program', CsrProgram::class)->name('csrprogram');
Route::get('/researchdedication', ResearchDedication::class)->name('researchdedication');

//Route::get('/contact', [ContactController::class, 'index'])->name('contact');
//Route::get('/aboutus', [AboutController::class, 'index'])->name('aboutus');
//Route::get('/csrprogram', [CsrController::class, 'index'])->name('csrprogram');
//Route::get('/researchdedication', [ResearchDedicationController::class, 'index'])->name('researchdedication');

require __DIR__.'/auth.php';
