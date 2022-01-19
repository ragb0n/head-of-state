<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dyplomacja') }}
        </h2>
    </x-slot>

<nav class="bg-white w-full shadow-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="navbar" class="flex space-x-4 h-16 mt-10 pt-5">
            <div class="btn btn-primary form-control inline-flex items-center px-4 py-2 bg-gray-800 border
            border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 
            transition ease-in-out duration-150 ml-3">
                <a href="/messages" class="font-bold">Wiadomości @include('messenger.unread-count')</a>
            </div>
            <div class="btn btn-primary form-control inline-flex items-center px-4 py-2 bg-gray-800 border
            border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 
            transition ease-in-out duration-150 ml-3">
                <a href="/messages/create" class="font-bold">Napisz wiadomość</a>
            </div>
        </div>
        <div class="container text-center">
            @yield('content')
        </div>
    </div>
</nav>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</x-app-layout>
