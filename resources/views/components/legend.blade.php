@props(['header', 'content', 'imagePath', 'reverse' => false])
<div class="flex justify-between items-start h-fit">
    @if ($reverse)
        <div class="shrink inline-flex flex-col gap-[26px]">
            <div class="title">{{ $header }}</div>
            <span class="inline-block max-w-[700px] mb-[120px] text-[24px] leading-[48px] break-words tracking-[1px]">
                {{ $content }}
            </span>
        </div>
        <img src="{{ $imagePath }}" alt="">
    @else
        <img src="{{ $imagePath }}" alt="">
        <div class="shrink inline-flex flex-col gap-[26px]">
            <div class="title text-right">{{ $header }}</div>
            <span class="inline-block max-w-[700px] mb-[120px] text-[24px] leading-[48px] break-words tracking-[1px]">
                {{ $content }}
            </span>
        </div>
    @endif
</div>
