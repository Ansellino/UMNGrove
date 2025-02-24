<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = News::query();

            // Search functionality
            if ($request->filled('search')) {
                $searchTerm = strip_tags($request->search);
                $query->where('title', 'like', '%' . $searchTerm . '%');
            }

            // Sorting
            $query->when($request->filled('sort'), function($query) use ($request) {
                return match($request->sort) {
                    'latest' => $query->latest(),
                    'oldest' => $query->oldest(),
                    default => $query->latest()
                };
            }, function($query) {
                return $query->latest();
            });

            // Paginate results with appended query parameters
            $news = $query->paginate(9);

            // Manually append query parameters
            if ($request->has('search')) {
                $news->appends('search', $request->search);
            }
            if ($request->has('sort')) {
                $news->appends('sort', $request->sort);
            }

            return view('news.index', compact('news'));

        } catch (QueryException $e) {
            return back()
                ->withErrors(['error' => 'An error occurred while fetching the news articles.'])
                ->withInput();
        }
    }

    public function show($slug)
    {
        try {
            $newsItem = News::where('slug', $slug)->firstOrFail();
            return view('news.show', compact('newsItem'));
        } catch (\Exception $e) {
            return back()
                ->withErrors(['error' => 'The requested article could not be found.'])
                ->withInput();
        }
    }
}
