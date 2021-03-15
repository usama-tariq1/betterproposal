
{{--


@php

$current_full_path = Request::getPathInfo();
$path = explode("/", $current_full_path);



// dd($path);



@endphp --}}

<ul class="tabs">
    <a href="/settings/brands/{{$brand->id}}">
        <li class="tab-link tab-left ">Name</li>
    </a>
    <a href="/settings/brands/{{$brand->id}}/sidebar">

        {{-- {{dd(Helper::CheckInUrl('sidebar'))}} --}}
        <li class="tab-link  {{ Helper::CheckInUrl('sidebar') ? 'current' : '' }}">Sidebar</li>
    </a>
    <a href="/settings/brands/{{$brand->id}}/email">
        <li class="tab-link {{ Helper::CheckInUrl('email') ? 'current' : '' }}" >Email</li>
    </a>
    <a href="">
        <li class="tab-link">Fonts</li>
    </a>
    <a href="">
        <li class="tab-link">Finances</li>
    </a>
    <a href="7">
        <li class="tab-link">Thank you</li>
    </a>
    <a href="">
        <li class="tab-link">Payments</li>
    </a>
    <a href="">
        <li class="tab-link">Custom Domain</li>
    </a>
    <a href="">
        <li class="tab-link tab-right">PDF</li>
    </a>
</ul> <!-- end tabs -->
