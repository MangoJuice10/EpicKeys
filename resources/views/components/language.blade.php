@props(['imagePath'])
<a href={{ route('localization', ['locale' => $slot]) }}
    class="flex justify-start items-center gap-[10px] h-[50px] px-[8px] hover:bg-[var(--color-1-hover-option)] cursor-pointer">
    <img src={{ asset($imagePath) }} class="w-[35px]">
    <span {{ $attributes }} class="font-semibold"> {{ __('static.languages.' . $slot) }} </span>
</a>
