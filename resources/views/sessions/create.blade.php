<x-layout>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <h1 class="text-center text-4xl text-white">{{__('login.signin')}}!</h1>

            <form class="mt-8 space-y-6" action="{{route('login.post')}}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <x-form.input name="username"/>
                    <x-form.input name="password" type="password"/>
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <x-svgs.login/>
                        </span>
                        {{__('login.signin')}}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
