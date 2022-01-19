<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <x-success-message/>

                    <form method="POST" action="">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="username" :value="__('Nazwa użytkownika')" />
                                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{ auth()->user()->username }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('Nowe hasło')" />
                                    <x-input id="new_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password"
                                             autocomplete="new-password" />
                                </div>
                                <div>
                                    <x-label for="confirm_password" :value="__('Powtórz hasło')" />
                                    <x-input id="confirm_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password_confirmation"
                                             autocomplete="confirm-password" />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Zapisz') }}
                            </x-button>
                        </form>
                            <form action="{{ route('profile.destroy') }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <x-button class="ml-3 bg-red-700">
                                    Usuń konto
                                </x-button>
                            </form>
                        </div>
                    <form method="POST" action="/profile/rename">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <div> Aktualna nazwa osady: </div>
                                    <div class="font-bold text-xl">{{ $city_name }}</div>
                                </div>
                                <div>
                                    <x-label for="city_name" :value="__('Nowa nazwa osady')" />
                                    <x-input id="city_name" class="block mt-1 w-full" type="text" name="city_name" value="" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-3">
                                {{ __('Zapisz') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
