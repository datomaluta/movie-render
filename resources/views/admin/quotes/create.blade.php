<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="{{route('admin.quotes.store')}}" enctype="multipart/form-data">
        @csrf
        <x-form.input name='text_en' />
        <x-form.input name='text_ka' />
        <x-form.input type="file" name='thumbnail' />

        <x-form.field>
            <x-form.label name='movie' for='movie'/>
            <select class="rounded" name="movie_id" id="movie_id" required>

                @foreach ($movies as $movie)
                    <option {{ old('movie_id') == $movie->id ? 'selected' : '' }} value={{ $movie->id }}>
                        {{ $movie->name }}</option>
                @endforeach

            </select>
        </x-form.field>

        <x-form.button>{{__('admin.add')}}</x-form.button>
    </form>
</x-admin-layout>
