@props(['name', 'minPrice', 'availableRegions', 'imagePath'])
<div class="grid grid-cols-3 grid-row 1 min-w-full h-[108px] border-1 border-[var(--color-border)]">
    <div>
        <img src="{{ $imagePath }}" class="w-full h-full">
    </div>
    <div class="col-span-2 flex flex-col justify-between px-[20px] py-[15px] bg-[var(--color-2)]">
        <div class="flex justify-between">
            <span>{{ $name }}</span>
            <span class="font-semibold">{{ $minPrice }} ₽</span>
        </div>
        <div>
            <span class="text-[#4d4d4d]">{{ $availableRegions }}</span>
        </div>
    </div>
</div>
