<x-app-layout>
    <h1>{{ $newsItem->title }}</h1>
    <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}">
    <p>{{ $newsItem->content }}</p>
    <p>Published: {{ $newsItem->published_at->format('Y-m-d') }}</p>
</x-app-layout>
