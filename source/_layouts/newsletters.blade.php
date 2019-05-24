@extends('_layouts.standard') 
@section('title', $page->title) 
@section('content')
<h1 class="decorated py-3 mb-4">{{ $page->title }}</h1>

{{-- I know inline CSS isn't good, but this is just a template so you should change everything anyway --}} @if ($page->image)
<!--<img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">-->
<img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover;width: 100%;"> @endif @yield('postContent')


<ul>
@foreach($newsletters as $nl)
<li>
    <a href="{{$nl["file"]}}" download>{{$nl->title}} - {{ date('F j, Y', $nl->date) }}</a>
</li>
@endforeach
</ul>

@include('_partials.lastReviewed')


@if ($page->comments)
    @include('_partials.comments') @else
<p>Comments are not enabled for this post.</p>
@endif
@endsection