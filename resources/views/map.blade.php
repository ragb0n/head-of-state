<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Świat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="flex flex-col">
                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nazwa osady
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Właściciel
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Współrzędne
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Akcje
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($cities as $city)
                                  @if($city->id == Auth::id())
                                  <tr class="bg-red-300">
                                  @else
                                  <tr>
                                  @endif
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="flex items-center">
                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                            {{ $city->name }}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">
                                        {{ $city->username }}
                                      </div>
                                    </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $city->x }} : {{ $city->y}}
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        @if($city->id == Auth::id())
                                          Twoje polis
                                        @else
                                        <div class="text-left">
                                          <div class="text-green-500 font-bold hover:underline"><a href="{{ url('/messages/create') }}">Napisz wiadomość</a></div>
                                          <div class="text-red-500 font-bold ">Zwiad</div>
                                          <div class="text-red-500 font-bold ">Atak</div>
                                        </div>
                                        @endif
                                      </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
