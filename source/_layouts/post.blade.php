@extends('_layouts.standard') 

@section('title', $page->title) 

@section('content')
<main>
    <h1 class="decorated py-3 mb-4">{{ $page->title }}</h1>

    {{-- I know inline CSS isn't good, but this is just a template so you should change everything anyway --}}
    @if ($page->image)
        <!--<img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">-->
        <a href="{{ $page->image }}" @if($page->image_title)title="{{$page->image_title}}"@endif @if($page->image_alt)alt="{{$page->image_alt}}"@endif class="featured">
            <img src="{{ $page->image }}" class="featured-image"  style="object-fit: cover; max-width:100%; display: block; object-fit: contain; max-width: 100%; display: block; width: 100%; height: 400px;">
        </a>
        @if($page->image_credit)
        <div class="image-credit">
            <em>Photo / {{$page->image_credit}}</em>
        </div>
        @endif

    @endif
    @yield('postContent')

    @if(is_array($page->image_gallery))
    <div class="image-gallery">
        @foreach($page->image_gallery as $image)
        <a href="{{$image["image"]}}" class="featured">
            <img src="{{ str_replace("https://res.cloudinary.com/whanganuihigh/image/upload/","https://res.cloudinary.com/whanganuihigh/image/upload/c_scale,q_80,w_300/",$image["image"])}}" @isset($image["description"])alt="{{$image["description"]}}"@endisset @isset($image["title"])title="{{$image["title"]}}"@endisset>
        </a>
        @endforeach
    </div>
    @endif

 

 <style>

a.featured[title]:after {
  content: attr(title);
  padding: 4px 8px;
  color: #FFF;
 background-color:black;
 display: block;
    }

    .image-credit {
        margin: -2em 0 2em 0;
    }

     </style>
     </main>
    @include('_partials.lastReviewed')
    @if($page->_meta->get('collection'))
    <small><a class="text-muted" href="{{ $page->baseUrl}}/admin/#/collections/{{ $page->_meta->get('collection') }}/entries/{{str_replace(".md","",$page->getFilename())}}" target="_BLANK" rel="nofollow">(*)</a></small>
    @endif
@endsection