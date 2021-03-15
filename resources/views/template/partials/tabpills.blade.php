

@php

$current_full_path = Request::getPathInfo();
$path = explode("/", $current_full_path);
if(!isset($path[2])){
    $path = '';

}
else{
    $path = $path[2];
}


// dd($path);



@endphp



<ul class="nav nav-pills tabs">
    <li class="{{ Helper::CheckInUrl('template') ? 'current' : '' }}"><a class="left-border" href="{{ route('template') }}">Proposal Templates</a></li>
    <li class="{{ Helper::CheckInUrl('cover') ? 'active' : '' }}"><a href="{{ url('/') }}/cover">Covers</a></li>
    <li class="{{ $path == 'cover' ? 'active' : ''  }}"><a href="">Qoutes</a></li>
    <li class="{{ $path == 'library' ? 'active' : ''  }}"><a class="right-border" href="#">Contect Library</a></li>
</ul>
