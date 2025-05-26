<x-layout>
    <x-slot:title>@lang('static.webpages.home.title')</x-slot:title>
    <div class="flex flex-col gap-y-[20px]">
        <x-legend header="{{__('static.webpages.home.legends.legend-1.title')}}"
            content="{{__('static.webpages.home.legends.legend-1.description')}}"
            imagePath="{{ asset('images/home/home1.svg') }}" reverse=true></x-legend>
        <x-legend header="{{__('static.webpages.home.legends.legend-2.title')}}"
            content="{{__('static.webpages.home.legends.legend-2.description')}}"
            imagePath="{{ asset('images/home/home2.svg') }}"></x-legend>
        <x-legend header="{{__('static.webpages.home.legends.legend-3.title')}}"
            content="{{__('static.webpages.home.legends.legend-3.description')}}"
            imagePath="{{ asset('images/home/home3.svg') }}" reverse=true></x-legend>
</x-layout>
