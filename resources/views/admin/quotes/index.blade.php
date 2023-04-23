<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-white text-bold text-4xl">{{ __('admin.quotes') }}</h1>
        <a href="{{ route('admin.quotes.create') }}"
            class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700">{{ __('admin.add') }}
        </a>
    </div>

    <div class="mt-8 px-16">
        @foreach ($quotes as $quote)
            <x-quote-row id="{{$quote->id}}" text="{{$quote->text}}" thumbnail="{{$quote->thumbnail}}"/>
        @endforeach

        <div class="mt-4 flex justify-center">
            {{ $quotes->links() }}
        </div>

    </div>
</x-admin-layout>
