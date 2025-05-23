<div
    class="grid grid-cols-1 grid-rows-[auto_auto] divide-y-[1px] divide-[var(--color-border)] w-full max-w-md m-auto border rounded-3xl border-[var(--color-border)] bg-[var(--color-1)] shadow-xl">
    <div class="flex justify-center items-center p-[20px] font-semibold">@lang('static.auth.register.title')</div>
    <x-form wire:submit.prevent="register" class="min-w-full rounded-b-3xl bg-[var(--color-2)]">
        <x-form.field>
            <x-form.label for="nickname">@lang('static.auth.nickname.title')</x-form.label>
            <x-form.input wire:model.blur="nickname" name="nickname" placeholder="{{__('static.auth.nickname.placeholder')}}" />
            <x-form.error name="nickname" />
        </x-form.field>
        <x-form.field>
            <x-form.label for="email">@lang('static.auth.email.title')</x-form.label>
            <x-form.input wire:model.blur="email" name="email" placeholder="{{__('static.auth.email.placeholder')}}" />
            <x-form.error name="email" />
        </x-form.field>
        <x-form.field>
            <x-form.label for="password">@lang('static.auth.password.title')</x-form.label>
            <x-form.input wire:model.blur="password" type="password" name="password"
                placeholder="{{__('static.auth.password.placeholder')}}" />
            <x-form.error name="password" />
        </x-form.field>
        <x-form.field>
            <x-form.label for="password">@lang('static.auth.password_confirmation.title')</x-form.label>
            <x-form.input wire:model.blur="password_confirmation" type="password" name="password_confirmation"
                placeholder="{{__('static.auth.password_confirmation.placeholder')}}" />
            <x-form.error name="password_confirmation" />
        </x-form.field>
        <x-form.button type="submit" class="self-center">@lang('static.auth.register.action')</x-form.button>
    </x-form>
</div>
