@props(['active' => false])

<a {{$attributes}} class="{{$active ? "font-semibold text-[var(--text-color)]" : "text-[var(--text-color-inactive)]"}} cursor-pointer">{{$slot}}</a>
