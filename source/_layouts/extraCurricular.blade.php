@extends('_layouts.standard')
@section('title', $page->title)
@section('content')
<h1 class="decorated py-3 mb-4">{{ $page->title }}</h1>

@if ($page->image)

<!--<img src="{{ $page->image }}" class="featured-image" style="object-fit: cover; height: 250px; width: 100%;">-->
<a href="{{ $page->image }}" @if($page->image_title)title="{{$page->image_title}}"@endif
    @if($page->image_alt)alt="{{$page->image_alt}}"@endif class="featured">
    <img src="{{ $page->image }}" style="object-fit: cover; max-width:100%; display: block;">
</a>

@endif

@yield('postContent')

@foreach($extracurricular_areas as $ec_area)

<details>
    <summary>
        <h2 class="decorated d-table mt-5 mb-2">{{$ec_area->title}}</h2>
    </summary>

    @if($ec_area->image)
    <img src="{{str_replace("https://res.cloudinary.com/whanganuihigh/image/upload/","https://res.cloudinary.com/whanganuihigh/image/upload/q_auto,f_auto,w_500,h_300,c_lfill,g_auto/", $ec_area->image)}}"
        srcset="
            {{str_replace("https://res.cloudinary.com/whanganuihigh/image/upload/","https://res.cloudinary.com/whanganuihigh/image/upload/q_auto,f_auto,w_950,h_300,c_lfill,g_auto/", $ec_area->image)}} 950w,
            {{str_replace("https://res.cloudinary.com/whanganuihigh/image/upload/","https://res.cloudinary.com/whanganuihigh/image/upload/q_auto,f_auto,w_500,h_300,c_lfill,g_auto/", $ec_area->image)}} 500w
        " sizes="(min-width: 800px) 950px, 500px" alt="" style="max-width: 100%">
    @endif

    @php
        $personInCharge = $staff->firstWhere('title', $ec_area->person_in_charge);
    @endphp
    <h3>Person in charge</h3>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Phone</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $personInCharge->title ?? '' }}</td>
                <td>{{ $personInCharge->phone ?? '' }}</td>
                <td>{{ $personInCharge->mobile ?? '' }}</td>
            </tr>
        </tbody>
    </table>

    {!! $ec_area !!}


    <h3>Available activities</h3>
    <table>

        {{--  --}}
        @foreach( $extracurricular_activities->where('extracurricular_area', $ec_area->title)
         as $ec_activity )

        <tr>
            <td>
                <a href="{{$ec_activity->getPath()}}">{{$ec_activity->title}}</a>
            </td>
        </tr>
        @endforeach

    </table>

    <a href="{{$ec_area->getPath()}}" class="btn btn-light my-5">See all {{$ec_area->title}} activities.</a>

</details>
@endforeach

@include('_partials.lastReviewed')

@endsection