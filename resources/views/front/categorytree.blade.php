@foreach($children as $sub)

    <ul class="dropdown-menu">
            @if(count($sub->children))
            <li><a href="{{route('categorytreatment',['id' => $sub->id])}}">{{$sub->title}}</a></li>
        @endif
    </ul>
    </li>
@endforeach
