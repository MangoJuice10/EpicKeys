@props(['title', 'imagePath', 'route'])
<a href={{ $route }}
    class="flex items-center gap-[10px] h-[50px] px-[8px] hover:bg-[var(--color-1-hover-option)] cursor-pointer">
    <img src={{ asset($imagePath) }} class="w-35px max-w-[35px]">
    <span {{ $attributes }} class="font-semibold">{{ $title }}</span>
</a>
