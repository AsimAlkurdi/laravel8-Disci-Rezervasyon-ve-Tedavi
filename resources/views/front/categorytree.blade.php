
@foreach($children as $sub)

    @if(count($sub->children))
        <ul class="dropdown-menu">
            <li><a href="{{route('categorytreatment',['id' => $sub->id])}}">{{$sub->title}}</a></li>
        </ul>
    @endif

@endforeach
