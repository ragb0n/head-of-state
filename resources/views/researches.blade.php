<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Badania') }}
        </h2>
    </x-slot>
    <script src="{{asset('js/countdown.js')}}"></script>
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
                                      Info
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Obecny poziom
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Koszt ulepszenia
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Czas ulepszenia
                                      </th>
                                    <th scope="col" class="relative px-6 py-3">
                                      <span class="sr-only">Edit</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/cog.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Inżynieria
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[0]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['1']['silver']}}
                                            D: {{ $prices['1']['wood']}}
                                            K: {{ $prices['1']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['1'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[0] != null)
                                        <script>
                                            countdown({{ $times_to_end[0] }});
                                          </script>
                                            <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['1']['wood'] && $owned_resources[0]['silver'] >=  $prices['1']['silver'] && $owned_resources[0]['stone'] >=  $prices['1']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[0]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/forestry.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Leśnictwo
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[1]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['2']['silver']}}
                                            D: {{ $prices['2']['wood']}}
                                            K: {{ $prices['2']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['2'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[1] != null)
                                        <script>
                                          countdown({{ $times_to_end[1] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['2']['wood'] && $owned_resources[0]['silver'] >=  $prices['2']['silver'] && $owned_resources[0]['stone'] >=  $prices['2']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[1]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/pick.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Geologia
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[2]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['3']['silver']}}
                                            D: {{ $prices['3']['wood']}}
                                            K: {{ $prices['3']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['3'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[2] != null)
                                        <script>
                                          countdown({{ $times_to_end[2] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['3']['wood'] && $owned_resources[0]['silver'] >=  $prices['3']['silver'] && $owned_resources[0]['stone'] >=  $prices['3']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[2]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/storage.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Logistyka
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[3]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['4']['silver']}}
                                            D: {{ $prices['4']['wood']}}
                                            K: {{ $prices['4']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['4'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[3] != null)
                                        <script>
                                          countdown({{ $times_to_end[3] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['4']['wood'] && $owned_resources[0]['silver'] >=  $prices['4']['silver'] && $owned_resources[0]['stone'] >=  $prices['4']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[3]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                         </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Sztuka wojenna
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[6]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['7']['silver']}}
                                            D: {{ $prices['7']['wood']}}
                                            K: {{ $prices['7']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['7'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[6] != null)
                                        <script>
                                          countdown({{ $times_to_end[6] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['7']['wood'] && $owned_resources[0]['silver'] >=  $prices['7']['silver'] && $owned_resources[0]['stone'] >=  $prices['7']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[6]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                                <img  src="/images/intelligence.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Wywiad
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Lepsze zrozumienie mechanizmów ekonomicznych i finansowych pozwala na <br>
                                                bardziej efektywne zarządzanie finansami kraju. Wyższy poziom nieznacznie <br>
                                                podwyższa przyrost Twoich funduszy.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[7]->level }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            S: {{ $prices['8']['silver']}}
                                            D: {{ $prices['8']['wood']}}
                                            K: {{ $prices['8']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $research_times['8'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[7] != null)
                                        <script>
                                          countdown({{ $times_to_end[7] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['8']['wood'] && $owned_resources[0]['silver'] >=  $prices['8']['silver'] && $owned_resources[0]['stone'] >=  $prices['8']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/researches/' . $researches[7]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                          
                                        </td>
                                    </tr>
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
