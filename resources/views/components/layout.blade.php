<!DOCTYPE html>
<html class="h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Movies and Quotes</title>
    <link rel="shortcut icon" href="{{ asset('quote-icon.png') }}">

</head>

<body class="h-screen bg-gradient-radial from-neutral-600 to-neutral-700 font-sansation-reg">

    <div class="fixed top-[50%] left-14 translate-y-[-50%] flex flex-col">
        @foreach (Config::get('languages') as $lang => $language)
            <a href="{{ route('lang.switch', $lang) }}"
                class="mb-4 rounded-full flex items-center justify-center w-12 h-12
            {{ $lang == App::getLocale() ? 'text-black bg-white' : 'text-white bg-transparent border-2 border-white' }}">
                {{ $lang }}</a>
        @endforeach
    </div>

    {{ $slot }}

    @auth
        <form id="logout-form" method="POST" action="{{ route('logout') }}"
            class="bg-white text-black p-2 fixed top-5 right-5 rounded" class="hidden">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    @else
        <a class="bg-white text-black p-2 fixed top-5 right-5 rounded" href="{{ route('login') }}">Log In</a>
    @endauth
</body>

</html>
