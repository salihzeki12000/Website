@foreach($policies as $page) {{$page->title}}
<ul>
    @foreach($page->policyAreas as $area)
    <li>{{$area->title}}
        <ul>
            @foreach($area->policies as $policy)
            <li>
                {{$policy->title}}

            </li>

            @endforeach
        </ul>
    </li>
    @endforeach
</ul>
@endforeach