@props(['name'])
<div class="flex justify-between items-center px-[15px] cursor-pointer hover:bg-[var(--color-1-hover-option)]"
    {{ $attributes }}>
    <span>{{ $name }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" class="w-[20px] h-[20px]">
        <path
            d="M69.844 43.388 33.842 13.386a6.003 6.003 0 0 0-7.688 9.223L56.624 48l-30.47 25.39a6.003 6.003 0 0 0 7.688 9.223l36.002-30.001a6.01 6.01 0 0 0 0-9.223Z" />
    </svg>
</div>
