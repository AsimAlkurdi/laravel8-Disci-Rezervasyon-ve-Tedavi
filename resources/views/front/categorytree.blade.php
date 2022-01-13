@foreach($children as $sub)


    <ul class="dropdown-menu">
            @if(count($sub->children))
            <li><a href="services.html">{{$sub->title}}</a></li>
        @endif
    </ul>
</li>
@endforeach
