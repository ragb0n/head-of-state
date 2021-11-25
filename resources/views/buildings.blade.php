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
                                              Huta
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Huta odpowiada za produkcję stali. Im wyższy poziom, tym większy <br>
                                              godzinowy przyrost tego surowca.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->steelworks_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/steel_storage.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Skład stali
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Poziom składu stali określa maksymalną ilość tego surowca, <br>
                                              jaka może zostać zmagazynowana. Jeżeli osiagnięty zostanie limit, <br>
                                              produkcja tego surowaca zostanie wstrzymana. Wyższy poziom składu <br>
                                              pozwala na bardziej efektywne metody magazynowanie stali, a co <br>
                                              za tym idzie, większe ilości stali mogą być składowane. <br>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->steel_storage_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                          {{ $buildings[0]->sawmill_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
                                        </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Buduj</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12">
                                            <img class="h-10 w-10" src="/images/wood_storage.png" alt="">
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                              Skład drewna
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Poziom składu drewna określa maksymalną ilość tego surowca, <br>
                                              jaka może zostać zmagazynowana. Jeżeli osiagnięty zostanie limit, <br>
                                              produkcja tego surowaca zostanie wstrzymana. Wyższy poziom składu <br>
                                              pozwala na bardziej efektywne metody magazynowanie drewna, a co <br>
                                              za tym idzie, większe ilości drewna mogą być składowane. <br>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->wood_storage_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                              Rafineria
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Rafineria odpowiada za produkcję ropy. Im wyższy poziom, tym większy <br> 
                                              godzinowy przyrost tego surowca.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->refinery_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                              Skład ropy
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Poziom składu ropy określa maksymalną ilość tego surowca, <br>
                                              jaka może zostać zmagazynowana. Jeżeli osiagnięty zostanie limit, <br>
                                              produkcja tego surowaca zostanie wstrzymana. Wyższy poziom składu <br>
                                              pozwala na bardziej efektywne metody magazynowanie ropy, a co <br>
                                              za tym idzie, większe ilości ropy mogą być składowane. <br>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->oil_storage_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                              Osiedle mieszkalne
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Poziom osiedla mieszkalnego określa ilość ludności będącej aktualnie <br>
                                              do Twojej dyspozycji. Każdy budynek wymaga do funkcjonowania określonej<br>
                                              liczby ludzi. Również rekrutacja nowych jednostek zużywa wolną część populacji.<br>
                                              Im wyższy poziom osiedla, tym większa jest liczba dostępnej populacji.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->residential_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                              Bank
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              Bank odpowiada za dbanie o wartość pieniądza oraz pobieranie podatków od populacji.<br>
                                              Im wyższy poziom banku, tym wyższy współczynnik poboru podatków od posiadanej populacji, <br>
                                              a co za tym idzie - większy przyrost godzinowy funduszy.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->bank_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                              Garnizon
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              W garnizonie rekrutowane są wojska. Im bardziej rozbudowany, tym bardziej <br>
                                              zaaawnsowane jednostki moga być rekrutowane. Wyższy poziom garnizonu skraca <br>
                                              również czas rekrutacji jednostek.
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                          {{ $buildings[0]->garrison_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
                                          {{ $buildings[0]->laboratory_level }}
                                        </div>
                                      </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --KOSZT--
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            --CZAS--
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
