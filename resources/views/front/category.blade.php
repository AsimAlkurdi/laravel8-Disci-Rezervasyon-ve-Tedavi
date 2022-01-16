@php
    $parantCategoies = \App\Http\Controllers\HomeController::categorylist()
@endphp


<li class="dropdown @if(!isset($page)) show-on-click @endif" >
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">Our treatments</a>
    <ul class="dropdown-menu">
        @foreach($parantCategoies as $rs)
        <li><a href="{{route('categorytreatment',['id' => $rs->id])}}">{{$rs->title}}</a></li>

        @endforeach
    </ul>
</li>
