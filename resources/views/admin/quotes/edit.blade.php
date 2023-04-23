<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="{{route('admin.quotes.update',['quote'=>$quote->id])}}"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name='text_en' :value="old('text_en', $quote->getTranslations('text')['en'])" />
        <x-form.input name='text_ka' :value="old('text_ka', $quote->getTranslations('text')['ka'])" />
        <div class="mb-4">
            <x-form.input name='thumbnail' type='file' :value="old('thumbnail', $quote->thumbnail)" />
            <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="ssss" class="h-12 mt-4 rounded">
        </div>
        <x-form.field>
            <x-form.label name='slug' />
            <select class="rounded" name="movie_id" id="movie_id" required>
                @foreach ($movies as $movie)
                    <option {{ $quote->movie_id == $movie->id ? 'selected' : '' }} value={{ $movie->id }}>
                        {{ $movie->name }}</option>
                @endforeach
            </select>
        </x-form.field>


        <x-form.button>{{__('admin.save')}}</x-form.button>
    </form>
</x-admin-layout>
