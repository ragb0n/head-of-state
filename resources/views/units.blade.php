<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Armia') }}
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
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
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Piechota
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
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Wóz bojowy
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Opancerzony wóz bojowy. Oferuje znacznie większą siłę ognia jak i odporność <br>
                                                na obrażenia niż zwykła piechota, jednak wciąż nie może równać się z czołgiem.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Czołg lekki
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Podstawowa jednostka pancerna. Czołgi lekkie stanowią trzon Twoich sił zbrojnych. <br>
                                                Co prawda nie sa niezniszczalne, jednak to one zapewniają najwięcej siły ogniowej.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Czołg ciężki
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
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Działo przeciwlotnicze
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
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Myśliwiec
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Podstawowa jednostka powietrzna. Przeznaczona głównie do niszczenie innych samolotów <br>
                                                wroga, jednak jest w stanie zadać również pewne obrażenia jednostkom lądowym. 
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Bombowiec
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
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Dron szpiegowski
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Prosty, bezzałogowy dron szpiegowski. Jego potencjał ofensywny jak i defensywny <br>
                                                jest praktyczni równy zeru, jednak pozwala na zdobycie informacji o wrógu, takich jak <br>
                                                posiadana liczba zasobów, wojsk, poziom rozwoju jego technologii itp.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Samobieżna wyrzutnia rakiet
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Najprostsza z jednostek rakietowych. Jest w stanie strzelać mało precyzyjnymi <br>
                                                salwami rakiet na danym obszarze, powodując i tak znaczące straty wśród jednostek <br>
                                                lądowych wroga.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Zestaw rakiet samonaprowadzających
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Zestaw rakiet przeznaczonych do precyzyjnego niszczenia jednostek lądowych, <br>
                                                jak i powietrznych przeciwnika. Zaawansowana technologia naprowadzania pozwala na <br>
                                                zwiększenie skuteczności, jednak w zamian za większe koszty produkcji.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Mobilny system balistyczny
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Rakietowy pocisk balistyczny krótkiego zasięgu.Pozwala na dokonywanie bezpośrednich ataków <br>
                                                rakietowych. Obrona przeciwlotnicza ma małą, lecz niezerową szansę unieszkodliwienia <br>
                                                tego typu pocisku w locie. Najskuteczniejsza obroną jest jednak odpowiedni system przecirakietowy.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
                                              <img class="h-10 w-10" src="/images/steelworks.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                              <div class="text-sm font-medium text-gray-900">
                                                Mobilny pocisk antybalistyczny
                                              </div>
                                              <div class="text-sm text-gray-500">
                                                Rakietowy pocisk balistyczny służący do zwalczania innych pocisków rakietowych. <br>
                                                Najskuteczniejsza obrona przed pociskami balistycznymi wroga.
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                          <div class="text-sm text-gray-900">0</div>
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
