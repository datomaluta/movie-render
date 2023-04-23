@props(['id', 'text', 'thumbnail'])

<div class="flex justify-between items-center py-4 border-b border-white">
    <a class="text-white text-xl w-[1/2] hover:underline flex items-center" href="{{ route('quote', ['quote' => $id]) }}">
        @if (Str::startsWith($thumbnail, 'thumbnails'))
            <img class="h-10 w-14 rounded mr-2 object-cover" src="{{ asset('storage/' . $thumbnail) }}"
                alt="quoteimggg">
        @else
            <img class="h-10 w-14 rounded mr-2 object-cover" src="{{ $thumbnail }}" alt="quoteimggg">
        @endif
        <span>{{ $text }}</span>
    </a>
    <div class="flex">
        <a class="text-white px-4 py-1 bg-green-500 rounded mr-2 hover:bg-green-700"
            href="{{ route('admin.quotes.edit', ['quote' => $id]) }}">{{ __('admin.edit') }}</a>
        <form action="{{ route('admin.quotes.delete', ['quote' => $id]) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">{{ __('admin.delete') }}</button>
        </form>
    </div>
</div>
