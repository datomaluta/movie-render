<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="{{route('admin.movies.store')}}">
        @csrf
        <x-form.input name="name_en"/>
        <x-form.input name="name_ka"/>
        <x-form.input name="slug"/>
        <x-form.button>{{__('admin.add')}}</x-form.button>
    </form>
</x-admin-layout>
