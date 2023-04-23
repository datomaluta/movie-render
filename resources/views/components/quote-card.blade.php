@props(['imgsrc','quotetext'])

<div class="w-full min-h-[33.3rem] bg-white mb-16 rounded-[0.625rem] border border-black overflow-hidden">
    @if (Str::startsWith($imgsrc, 'thumbnails'))
        <img class="w-full h-[26rem] object-cover" src="{{asset('storage/' . $imgsrc)}}" alt="quoteimggg">
    @else
        <img class="w-full h-[26rem] object-cover" src="{{$imgsrc}}" alt="quoteimggg">
    @endif

    <p class="text-4xl py-9 px-4">{{$quotetext}}</p>
</div>