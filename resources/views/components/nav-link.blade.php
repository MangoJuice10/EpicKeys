@props(['active' => false])

<a {{$attributes}} class="{{$active ? "font-semibold text-black" : "text-[#4d4d4d]"}} cursor-pointer">{{$slot}}</a>
