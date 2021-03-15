
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

    <li class="{{ $path == '' ? 'active' : ''  }}"><a class="left-border" href="{{ route('proposals') }}">Draft</a></li>
    <li class="{{ $path == 'outstanding' ? 'active' : ''}}"><a href="{{ route('outstanding') }}">Outstanding</a></li>
    <li class="{{ $path == 'accepted' ? 'active' : ''}}" ><a href="{{ route('accepted') }}">Accepted</a></li>
    <li class="{{ $path == 'lost' ? 'active' : ''}}"><a class="right-border" href="{{ route('lost') }}">Lost</a></li>
</ul>
