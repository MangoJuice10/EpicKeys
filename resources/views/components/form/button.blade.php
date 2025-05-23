<button
    {{ $attributes->merge(['class' => 'inline-flex justify-center items-center w-4/7 px-[30px] py-[7px] border-1 border-[var(--color-border)] rounded-3xl bg-[var(--color-1-button)] transition-all duration-300 hover:bg-[var(--color-1-hover-button)] hover:scale-105 active:bg-[var(--color-1-active)] cursor-pointer']) }}>{{ $slot }}</button>
