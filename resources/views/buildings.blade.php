<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Budynki') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                                            <img class="h-10 w-10" src="/images/steelworks.png" alt="">
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
                                          S: {{ $prices['1']['money']}}
                                          D: {{ $prices['1']['wood']}}
                                          K: {{ $prices['1']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['1'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/sawmill.png" alt="">
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
                                          S: {{ $prices['2']['money']}}
                                          D: {{ $prices['2']['wood']}}
                                          K: {{ $prices['2']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['2'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/rafinery.png" alt="">
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
                                          S: {{ $prices['3']['money']}}
                                          D: {{ $prices['3']['wood']}}
                                          K: {{ $prices['3']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['3'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/oil_storage.png" alt="">
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
                                          S: {{ $prices['4']['money']}}
                                          D: {{ $prices['4']['wood']}}
                                          K: {{ $prices['4']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['4'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/residental.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Zagroda 
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Populacja Twojego polis jest zależna od poziomu rozbudowy Twojej zagrody. <br>
                                              Im wyższy jej poziom, tym więcej żywności jest w stanie wytworzyć, a więc i <br>
                                              wykarmić większą liczbę mieszkańców.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[4]->level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          S: {{ $prices['5']['money']}}
                                          D: {{ $prices['5']['wood']}}
                                          K: {{ $prices['5']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['5'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/bank.png" alt="">
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
                                          S: {{ $prices['6']['money']}}
                                          D: {{ $prices['6']['wood']}}
                                          K: {{ $prices['6']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['6'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-12 w-12 rounded-full" src="/images/garrison.png" alt="">
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
                                          S: {{ $prices['7']['money']}}
                                          D: {{ $prices['7']['wood']}}
                                          K: {{ $prices['7']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['7'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/laboratory.png" alt="">
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
                                          S: {{ $prices['8']['money']}}
                                          D: {{ $prices['8']['wood']}}
                                          K: {{ $prices['8']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['8'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/laboratory.png" alt="">
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
                                          S: {{ $prices['9']['money']}}
                                          D: {{ $prices['9']['wood']}}
                                          K: {{ $prices['9']['stone']}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          {{ $building_times['9'] }}
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
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
