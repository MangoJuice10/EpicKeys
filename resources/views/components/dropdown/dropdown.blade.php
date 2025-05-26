<div
    {{ $attributes->merge(['class' => 'hidden group-hover/dropdown:block hover:block absolute top-full w-max border border-[var(--color-border)] bg-[var(--color-1)]']) }}>
    <div class="grid grid-cols-1 justify-stretch divide-y-[1px] divide-[var(--color-border)]">
        {{ $slot }}
    </div>
</div>
