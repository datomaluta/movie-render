<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST"
        action="{{ route('admin.movies.update',['movie' => $movie->id]) }}">
        @csrf
        @method('PATCH')
        <x-form.input name='name_en' :value="old('name_en', $movie->getTranslations('name')['en'])" />
        <x-form.input name='name_ka' :value="old('name_ka', $movie->getTranslations('name')['ka'])" />
        <x-form.input name='slug' :value="old('slug', $movie->slug)" />

        <x-form.button>{{ __('admin.save') }}</x-form.button>
    </form>
</x-admin-layout>
