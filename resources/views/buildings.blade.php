<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Budynki') }}
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
                                            <img  src="/images/quarry.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Kamieniołom
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Kamieniołom odpowiada za produkcję kamienia. Im wyższy poziom, tym większy <br>
                                              godzinowy przyrost tego surowca.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['1']['silver']}}
                                          D: {{ $prices['1']['wood']}}
                                          K: {{ $prices['1']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['1'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[0]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                        @endif
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img  src="/images/saw.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Tartak
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Tartak odpowiada za produkcję drewna. Im wyższy poziom, tym większy <br> 
                                              godzinowy przyrost tego surowca.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[1]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['2']['silver']}}
                                          D: {{ $prices['2']['wood']}}
                                          K: {{ $prices['2']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['2'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[1]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
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
                                              Kopalnia srebra
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Rafineria odpowiada za produkcję srebra. Im wyższy poziom, tym większy <br> 
                                              godzinowy przyrost tego surowca.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[2]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['3']['silver']}}
                                          D: {{ $prices['3']['wood']}}
                                          K: {{ $prices['3']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['3'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[2]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
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
                                              Magazyn
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Poziom magazynu określa maksymalną ilość surowców, <br>
                                              jaka może zostać zmagazynowana. Jeżeli osiagnięty zostanie limit, <br>
                                              produkcja surowców zostanie wstrzymana. Wyższy poziom magazynu <br>
                                              pozwala na bardziej efektywne metody magazynowanie surowców, a co <br>
                                              za tym idzie, większe ilości zasobów mogą być składowane. <br>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[3]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['4']['silver']}}
                                          D: {{ $prices['4']['wood']}}
                                          K: {{ $prices['4']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['4'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[3]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img  src="/images/crown.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Siedziba władz
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              W siedzibie władz urzędujesz Ty oraz Twoja administracja <br>
                                              Im bardziej rozwinięta siedziba, a co za tym idzie administracja, tym szybciej <br>
                                              przebiega budowa nowych budynków.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[5]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['6']['silver']}}
                                          D: {{ $prices['6']['wood']}}
                                          K: {{ $prices['6']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['6'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[5] != null)
                                        <script>
                                          countdown({{ $times_to_end[5] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['6']['wood'] && $owned_resources[0]['silver'] >=  $prices['6']['silver'] && $owned_resources[0]['stone'] >=  $prices['6']['stone'])
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[5]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img src="/images/garrison.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Koszary
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              W koszarach rekrutowane są wojska. Im bardziej rozbudowane, tym bardziej <br>
                                              zaaawnsowane jednostki moga być rekrutowane. Wyższy poziom koszar skraca <br>
                                              również czas rekrutacji jednostek.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[6]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['7']['silver']}}
                                          D: {{ $prices['7']['wood']}}
                                          K: {{ $prices['7']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['7'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[6]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img  src="/images/laboratory.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Laboratorium
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              W laboratorium prowadzone są badania. Te bardziej zaawansowane potrzebują wysoce <br>
                                              zaawansowanej aparatury, która dostepna jest w wysoko rozwiniętych laboratoriach. <br>
                                              Wyższy poziom laboratorium nie tylko odblokowywuje nowe badania, ale skraca czas <br>
                                              przeprowadzania tych już dostępnych.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[7]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['8']['silver']}}
                                          D: {{ $prices['8']['wood']}}
                                          K: {{ $prices['8']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['8'] }}
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
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[7]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                        @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                        @endif                                      
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img  src="/images/fort.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Fort
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Solidne fortyfikacje wokół Twojego polis zapewniają bonus do obrony w razie wrogiego ataku.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[8]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['9']['silver']}}
                                          D: {{ $prices['9']['wood']}}
                                          K: {{ $prices['9']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['9'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if($times_to_end[8] != null)
                                        <script>
                                          countdown({{ $times_to_end[8] }});
                                        </script>
                                          <div id="timer"></div>
                                        @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                        @elseif($owned_resources[0]['wood'] >=  $prices['9']['wood'] && $owned_resources[0]['silver'] >=  $prices['9']['silver'] && $owned_resources[0]['stone'] >=  $prices['9']['stone'])
                                        <a href="{{ url('/city/' . $user_id . '/buildings/' . $buildings[8]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
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
