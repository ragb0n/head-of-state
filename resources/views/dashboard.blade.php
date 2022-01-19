<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Podgląd') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Witaj ponownie, {{ auth()->user()->username}}
                </div>
            </div>
        </div>
        <br>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Status polis: {{ $city_name }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="font-bold">Produkcja surowców</span>
                    <br>
                    <div>
                        Srebro: <span class="text-green-800 font-bold">+{{ $production['silver'] }}/h</span>
                    </div>
                    <div>
                        Drewno: <span class="text-green-800 font-bold">+{{ $production['wood'] }}/h</span>
                    </div>
                    <div>
                        Kamień: <span class="text-green-800 font-bold">+{{ $production['stone'] }}/h</span>
                    </div>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="font-bold">Aktualna budowa</span>
                    <br>
                    -----
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="font-bold">Aktualnie prowadzone badania</span>
                    <br>
                    -----
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span class="font-bold">Aktualnie prowadzona rekrutacja</span>
                    <br>
                    -----
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
