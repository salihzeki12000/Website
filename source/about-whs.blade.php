@extends('_layouts.full')


@section('title', 'Posts')
{{-- 
@section('content')
    <h1>Posts</h1>

    <ul>
        @forelse ($about->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection --}}
