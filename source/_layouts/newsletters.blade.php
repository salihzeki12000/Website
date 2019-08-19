@extends('_layouts.standard') 
@section('title', $page->title) 
@section('content')
<h1 class="decorated py-3 mb-4">{{ $page->title }}</h1>

{{-- I know inline CSS isn't good, but this is just a template so you should change everything anyway --}} 
@if($page->image)
<!--<img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover; height: 250px; width: 100%;">-->
<img src="{{ $page->imageCdn($page->image) }}" style="object-fit: cover;width: 100%;">
@endif


@yield('postContent')



<table class="table table-striped table-borderless table-hover">
@foreach($newsletters->sortByDesc('date') as $nl)
<tr>
    <td width="30%">{{ date('F j, Y', $nl->date) }}</td>
    <td>
        <a href="{{$nl["file"]}}" download>{{$nl->title}} ({{ date('F Y', $nl->date) }})</a>
    </td>

</tr>
@endforeach
</table>

@include('_partials.lastReviewed')

@endsection