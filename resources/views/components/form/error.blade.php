@props(['name'])

@error($name)
    <span class="text text-red-500">{{ $message }}</span>
@enderror
