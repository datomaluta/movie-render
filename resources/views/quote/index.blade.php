<x-layout>
    @if ($quote)
    <div class="flex h-full justify-center items-center">
        <div class="flex flex-col items-center ">
            <div class="w-[43.8rem] h-[24.13rem] mb-16">
                @if (Str::startsWith($quote->thumbnail, 'thumbnails'))
                    <img class="w-full h-full rounded-[0.625rem] object-cover" src="{{asset('storage/' . $quote->thumbnail)}}" alt="quoteimggg">
                @else
                    <img class="w-full h-full rounded-[0.625rem] object-cover" src="{{$quote->thumbnail}}" alt="quoteimggg">
                @endif
            </div>

            <h1 class="text-white text-5xl text-center leading-[4.35rem] mb-28 px-24 ">"{{ $quote->text }}"</h1>

            <a class="text-white text-5xl text-center underline leading-[3.35rem]"
                href="{{ route('movie', ['movie' => $quote->movie->slug]) }}">{{ $quote->movie->name }}</a>
        </div>
    </div>

    @else
        <div class="h-full flex justify-center items-center">
            <h1 class="text-white text-4xl">{{__('admin.noquote')}}</h1>
        </div>
    @endif

</x-layout>
