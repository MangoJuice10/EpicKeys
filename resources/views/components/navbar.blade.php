@props(['genres'])
<style>
    @import url('https://fonts.googleapis.com/css2?family=Anta&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
</style>
<div name="menu" class="relative border-b-1 border-black">
    <div name="level-1" class='flex justify-between items-center h-[75px] px-[75px] bg-[var(--color-1)]'>
        <x-logo></x-logo>
        <div name='links' class='flex justify-between items-center gap-[40px] self-stretch'>
            <x-nav-link :active="request()->is('/')">Главная</x-nav-link>
            <div class="group self-stretch flex justify-center items-center">
                <x-nav-link name="level-1" :active="request()->is('catalog')">
                    Каталог игр
                </x-nav-link>
                <div name="level-2"
                    class="hidden group-hover:grid hover:grid grid-cols-4 grid-rows-1 absolute top-[100%] left-[453px] w-[850px] h-[596px] border-1 border-black bg-[var(--color-1)] z-1">
                    <div class="col-span-1 grid border-r-1 border-black">
                        <x-genre name="Все игры"
                            onmouseenter="document.querySelector('span[name=&quot;genre&quot;]').innerHTML = 'Все игры';"></x-genre>
                        @foreach ($genres as $genre)
                            <x-genre name="{{ $genre->name }}"
                                onmouseenter="document.querySelector('span[name=&quot;genre&quot;]').innerHTML = '{{ $genre->name }}';"></x-genre>
                        @endforeach
                    </div>
                    <div class="col-span-3 flex flex-col items-center gap-[40px] px-[30px]">
                        <span name="genre" class="title tracking-[1px]">Все игры</span>
                        <x-image-rectangle-card name="Red Dead Redemption 2" minPrice="900"
                            availableRegions="Аргентина, США"
                            imagePath="{{ Storage::url('games/icons/rdr2.jpg') }}"></x-image-rectangle-card>
                        <x-image-rectangle-card name="Red Dead Redemption 2" minPrice="900"
                            availableRegions="Аргентина, США"
                            imagePath="{{ Storage::url('games/icons/rdr2.jpg') }}"></x-image-rectangle-card>
                        <x-image-rectangle-card name="Red Dead Redemption 2" minPrice="900"
                            availableRegions="Аргентина, США"
                            imagePath="{{ Storage::url('games/icons/rdr2.jpg') }}"></x-image-rectangle-card>
                        <span
                            class="flex justify-center items-center min-w-[536px] min-h-[45px] border-1 border-black bg-[var(--color-2)] tracking-[1px] cursor-pointer">Просмотреть
                            все игры этого жанра</span>
                    </div>
                </div>
            </div>
            <x-nav-link :active="request()->is('reviews')">Отзывы</x-nav-link>
        </div>
        <div class="flex justify-between items-center gap-[40px]">
            <div name='search'
                class='flex justify-start items-center gap-[6px] h-[26px] w-[246px] overflow-x-auto px-[20px] border-1 rounded-3xl border-black bg-white cursor-pointer'>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="fill-[#808080]">
                    <path
                        d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0 6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5 1.5-1.5-5-5Zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5 11Z" />
                </svg>
                <input name="game" class="text-[14px] outline-none placeholder-[#cccccc]"
                    placeholder="Найти игру"></input>
            </div>
            <div name='cart' class='flex justify-between items-center gap-[8px] cursor-pointer'>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" fill="none">
                    <g clip-path="url(#a)">
                        <path fill="#000"
                            d="M24.27 9.783a3.068 3.068 0 0 0-2.364-1.116h-.094C21.29 3.803 17.312 0 12.499 0 7.687 0 3.697 3.803 3.176 8.667h-.052c-.906 0-1.77.411-2.364 1.116a3.354 3.354 0 0 0-.73 2.589l1.105 8.038c.437 3.185 3.094 5.58 6.187 5.58h10.386c3.094 0 5.75-2.395 6.187-5.58L25 12.372a3.354 3.354 0 0 0-.729-2.59ZM12.5 2.167c3.666 0 6.708 2.827 7.218 6.5H5.281c.51-3.673 3.552-6.5 7.218-6.5Zm10.437 9.901-1.104 8.039c-.292 2.123-2.063 3.716-4.125 3.716H7.322c-2.062 0-3.833-1.604-4.125-3.716l-1.104-8.039a1.132 1.132 0 0 1 .24-.866c.198-.239.479-.38.791-.38h18.782c.302 0 .583.13.78.369.199.238.293.552.24.866l.01.011Z" />
                        <path fill="#fff"
                            d="m22.937 12.068-1.104 8.039c-.292 2.123-2.063 3.716-4.125 3.716H7.322c-2.062 0-3.833-1.604-4.125-3.716l-1.104-8.039a1.132 1.132 0 0 1 .24-.866c.198-.239.479-.38.791-.38h18.782c.302 0 .583.13.78.369.199.238.293.552.24.866l.01.011ZM12.5 2.167c3.666 0 6.708 2.827 7.218 6.5H5.281c.51-3.673 3.552-6.5 7.218-6.5Z" />
                    </g>
                    <defs>
                        <clipPath id="a">
                            <path fill="#fff" d="M0 0h25v26H0z" />
                        </clipPath>
                    </defs>
                </svg>
                <span>Корзина</span>
            </div>
            <div name="favorite" class="flex justify-between items-center gap=[8px] cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="none">
                    <path fill="#000"
                        d="M14.5 26.653 3.933 16.104a7.368 7.368 0 0 1 0-10.34 7.25 7.25 0 0 1 10.268 0l.299.308.3-.308a7.248 7.248 0 0 1 10.267 0 7.377 7.377 0 0 1 0 10.34L14.5 26.653ZM9.062 5.437a5.383 5.383 0 0 0-3.851 1.604 5.555 5.555 0 0 0 0 7.785l9.289 9.271 9.29-9.27a5.556 5.556 0 0 0 0-7.786 5.438 5.438 0 0 0-7.695 0L14.5 8.618l-1.586-1.567a5.438 5.438 0 0 0-3.851-1.614Z" />
                    <path fill="#fff"
                        d="M9.063 5.437A5.383 5.383 0 0 0 5.21 7.041a5.555 5.555 0 0 0 0 7.785l9.289 9.271 9.29-9.27a5.556 5.556 0 0 0 0-7.786 5.438 5.438 0 0 0-7.695 0L14.5 8.618l-1.586-1.567a5.438 5.438 0 0 0-3.851-1.614Z" />
                </svg>
                <span>Избранное</span>
            </div>
            <div name="user" class="flex justify-between items-center gap-[8px] cursor-pointer">
                <span>RU</span>
                <img src="{{ asset('images/icons/profile.svg') }}" alt="Аватар" class="w-[40px] h-[40px]">
            </div>
        </div>
    </div>
</div>
