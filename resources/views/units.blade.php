<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Armia') }}
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
                                      Info
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Posiadana ilość
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
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Milicja
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Najprostsza i najtańsza z wszystkich jednostek, a co za tym idzie - najsłabsza.<br>
                                                Przez wielu uznawana za zwykłe mięso armatnie.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[0]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['1']['silver']}}
                                          D: {{ $prices['1']['wood']}}
                                          K: {{ $prices['1']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['1'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[0] != null)
                                            {{ $times_to_end[0] }}
                                          @elseif(in_array(isset($times_to_end), $times_to_end))
                                            <span class="text-grey-600 font-bold">Buduj</span>
                                          @elseif($owned_resources[0]['wood'] >=  $prices['1']['wood'] && $owned_resources[0]['silver'] >=  $prices['1']['silver'] && $owned_resources[0]['stone'] >=  $prices['1']['stone'])
                                            <a href="{{ url('/city/' . $user_id . '/units/' . $units[0]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                          @else
                                            <span class="text-red-600 font-bold">Buduj</span>
                                          @endif                                          </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Piechur
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Podstawowa jednostka każdej armii. Odpowiednio przeszkolona do prowadzenia <br>
                                                działań zbrojnych. Co prawda w starciu z wojskami pancernymi nie mają szans, <br>
                                                to jednak na piechocie opierają się siły zbrojne.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[1]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['2']['silver']}}
                                          D: {{ $prices['2']['wood']}}
                                          K: {{ $prices['2']['stone']}}                                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['2'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[1] != null)
                                          {{ $times_to_end[1] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['2']['wood'] && $owned_resources[0]['silver'] >=  $prices['2']['silver'] && $owned_resources[0]['stone'] >=  $prices['2']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[1]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                                  
                                      </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Procarz
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Opancerzony wóz bojowy. Oferuje znacznie większą siłę ognia jak i odporność <br>
                                                na obrażenia niż zwykła piechota, jednak wciąż nie może równać się z czołgiem.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[2]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['3']['silver']}}
                                          D: {{ $prices['3']['wood']}}
                                          K: {{ $prices['3']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['3'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[2] != null)
                                          {{ $times_to_end[2] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['3']['wood'] && $owned_resources[0]['silver'] >=  $prices['3']['silver'] && $owned_resources[0]['stone'] >=  $prices['3']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[2]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                             
                                      </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Łucznik
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Podstawowa jednostka pancerna. Czołgi lekkie stanowią trzon Twoich sił zbrojnych. <br>
                                                Co prawda nie sa niezniszczalne, jednak to one zapewniają najwięcej siły ogniowej.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[3]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['4']['silver']}}
                                          D: {{ $prices['4']['wood']}}
                                          K: {{ $prices['4']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['4'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[3] != null)
                                          {{ $times_to_end[3] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['4']['wood'] && $owned_resources[0]['silver'] >=  $prices['4']['silver'] && $owned_resources[0]['stone'] >=  $prices['4']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[3]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                             </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Hoplita
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Lepiej opancerzona i uzbrojona wersja czołgu lekkiego. Jest w stanie zadać większe <br>
                                                obrażenia, zarazem będąc w stanie przyjąć na siebie większą siłę ogniową. Lepsze <br>
                                                opancerzenie skutkuje zmniejszoną prędkością.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[4]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['5']['silver']}}
                                          D: {{ $prices['5']['wood']}}
                                          K: {{ $prices['5']['stone']}}                                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['5'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[4] != null)
                                          {{ $times_to_end[4] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['5']['wood'] && $owned_resources[0]['silver'] >=  $prices['5']['silver'] && $owned_resources[0]['stone'] >=  $prices['5']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[4]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                         
                                      </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Kawalerzysta
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Działo przeciwlotnicze stanowi tańszą i łatwiej dostępną alternatywę dla myśliwców. <br>
                                                Nie jest co prawda od nich skuteczniejsze w obronie powietrznej, jednak odpowiednia ich <br>
                                                ilość potrafi skutecznie przeszkodzić w niejednym ataku powietrznym.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[5]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['6']['silver']}}
                                          D: {{ $prices['6']['wood']}}
                                          K: {{ $prices['6']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['6'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[5] != null)
                                          {{ $times_to_end[5] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['6']['wood'] && $owned_resources[0]['silver'] >=  $prices['6']['silver'] && $owned_resources[0]['stone'] >=  $prices['6']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[5]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                              
                                      </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Rydwan
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Podstawowa jednostka powietrzna. Przeznaczona głównie do niszczenie innych samolotów <br>
                                                wroga, jednak jest w stanie zadać również pewne obrażenia jednostkom lądowym. 
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[6]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['7']['silver']}}
                                          D: {{ $prices['7']['wood']}}
                                          K: {{ $prices['7']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['7'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[6] != null)
                                          {{ $times_to_end[6] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['7']['wood'] && $owned_resources[0]['silver'] >=  $prices['7']['silver'] && $owned_resources[0]['stone'] >=  $prices['7']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[6]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
                                      @else
                                          <span class="text-red-600 font-bold">Buduj</span>
                                      @endif                                        
                                      </td>
                                      </tr>
                                      <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="flex items-center">
                                            <div class="flex-shrink-0 h-12 w-12">
                                              <img class="h-10 w-10"  src="/images/garrison.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Katapulta
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Jednostka zadająca poważne obrażenia siłom lądowym wroga, jednak praktycznie <br>
                                                bezbronna wobec innych pojazdów powietrznych, jak np. myśliwce. Dlatego też <br>
                                                dla zapewnienia bezpieczeństwa powinny operować jedynie w towarzystwie właśnie <br>
                                                myśliwców.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $units[7]->count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['8']['silver']}}
                                          D: {{ $prices['8']['wood']}}
                                          K: {{ $prices['8']['stone']}}                                        
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $recruit_times['8'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          @if($times_to_end[7] != null)
                                          {{ $times_to_end[7] }}
                                      @elseif(in_array(isset($times_to_end), $times_to_end))
                                          <span class="text-grey-600 font-bold">Buduj</span>
                                      @elseif($owned_resources[0]['wood'] >=  $prices['8']['wood'] && $owned_resources[0]['silver'] >=  $prices['8']['silver'] && $owned_resources[0]['stone'] >=  $prices['8']['stone'])
                                          <a href="{{ url('/city/' . $user_id . '/units/' . $units[7]->id) }}" class="text-green-600 hover:text-green-900 font-bold">Buduj</a>
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
