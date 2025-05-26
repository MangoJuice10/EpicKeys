<div class="mt-auto w-full px-[120px] py-[40px] border-t-1 border-[var(--color-border)] bg-[var(--color-1)]">
    <div class="flex flex-col gap-[80px]">
        <div class="flex justify-between items-start">
            <div class="flex flex-col items-center gap-[8px]">
                <x-logo></x-logo>
                <span class="tracking-[1px]">@lang('static.logo.description')</span>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-x-[100px] gap-y-[30px] w-[850px]">
                <x-footer.link href="/">@lang('static.footer.home')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.catalog')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.reviews')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.cart')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.account')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.purchases')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.about')</x-footer.link>
                <x-footer.link href="/">@lang('static.footer.contact')</x-footer.link>
            </div>
        </div>
        <div class="flex flex-col items-center gap-[11px]">
            <span class="text-[20px] text-[#4d4d4d]">© 2025 EpicKeys</span>
            <span class="w-[808px] text-center text-[#4d4d4d]">@lang('static.copyright.description')</span>
        </div>
    </div>
</div>
