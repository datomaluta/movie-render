@props(['slug', 'id', 'name'])

<div class="flex justify-between items-center py-4 border-b border-white">
    <a class="text-white text-3xl w-[1/2] hover:underline" href="/movies/{{ $slug }}">
        {{ $name }}</a>
    <div class="flex">
        <a class="text-white px-4 py-1 bg-green-500 rounded mr-1 hover:bg-green-700"
            href="{{route('admin.movies.edit',['movie'=>$id])}}">{{__('admin.edit')}}</a>
        <form action="{{route('admin.movies.delete',['movie'=>$id])}}" method="POST">
            @csrf
            @method('DELETE')

            <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">{{__('admin.delete')}}</button>
        </form>
    </div>
</div>
