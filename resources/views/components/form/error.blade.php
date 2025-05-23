@props(['name'])
@error($name)
    <span class="text-red-500 text-sm ml-1">{{ $message }}</span>
@enderror
