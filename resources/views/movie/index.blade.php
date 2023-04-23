<x-layout>
    <div class="flex flex-col mx-auto mt-20 max-w-[46.7rem]">


        <h1 class="text-5xl text-white mb-20">{{ $movie->name }}</h1>

        @if (count($quotes)>0)
            @foreach ($quotes as $quote)
                <x-quote-card imgsrc="{{ $quote->thumbnail }}" quotetext="{{ $quote->text }}" />
            @endforeach

        
        @else <h1 class="text-white text-4xl">This movie has no quotes yet</h1>

        @endif


    </div>

</x-layout>
