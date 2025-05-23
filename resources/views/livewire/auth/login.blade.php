<div
    class="grid grid-cols-1 grid-rows-[auto_auto] divide-y-[1px] divide-[var(--color-border)] w-full max-w-md m-auto border rounded-3xl border-[var(--color-border)] bg-[var(--color-1)] shadow-xl">
    <div class="flex justify-center items-center p-[20px] font-semibold">@lang('static.auth.login.title')</div>
    <x-form wire:submit.prevent="login" class="min-w-full rounded-b-3xl bg-[var(--color-2)]">
        <x-form.field>
            <x-form.label for="email">@lang('static.auth.email.title')</x-form.label>
            <x-form.input wire:model.blur="email" name="email" placeholder="{{__('static.auth.email.placeholder')}}" />
            <x-form.error name="email" />
        </x-form.field>
        <x-form.field>
            <x-form.label for="password">@lang('static.auth.password.title')</x-form.label>
            <x-form.input wire:model.blur="password" type="password" name="password" placeholder="{{__('static.auth.password.placeholder')}}" />
            <x-form.error name="password" />
        </x-form.field>
        <x-form.button type="submit" class="self-center">@lang('static.auth.login.action')</x-form.button>
    </x-form>
</div>
