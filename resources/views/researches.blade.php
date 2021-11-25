<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Badania') }}
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
                                                <img class="h-10 w-10" src="/images/chemistry.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Chemia
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
                                                {{ $researches[0]->chemistry_level }}
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
                                                <img class="h-10 w-10" src="/images/forestry.png" alt="">
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
                                                {{ $researches[0]->forestry_level }}
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
                                                <img class="h-10 w-10" src="/images/metallurgy.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Metalurgia
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
                                                {{ $researches[0]->metallurgy_level }}
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
                                                <img class="h-10 w-10" src="/images/logistics.png" alt="">
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
                                                {{ $researches[0]->logistics_level }}
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
                                                <img class="h-10 w-10" src="/images/economics.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Nauki ekonomiczne
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
                                                {{ $researches[0]->economics_level }}
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
                                                <img class="h-10 w-10" src="/images/planning.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Planowanie przestrzenne
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
                                                {{ $researches[0]->spatial_planning_level }}
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
                                                <img class="h-10 w-10" src="/images/army_defensive.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Wojskowe technologie obronne
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
                                                {{ $researches[0]->military_offensive_level }}
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
                                                <img class="h-10 w-10" src="/images/army_offensive.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Wojskowe technologie ofensywne
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
                                                {{ $researches[0]->military_defensive_level }}
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
                                                <img class="h-10 w-10" src="/images/aeronautics.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Aeronautyka
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
                                                {{ $researches[0]->aeronautics_level }}
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
                                                <img class="h-10 w-10" src="/images/moto.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Motoryzacja
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
                                                {{ $researches[0]->automotive_level }}
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
                                                <img class="h-10 w-10" src="/images/balistics.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Balistyka
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Rozwój balistyki pozwala na tworzenie lepszych, bardziej zaawansowanych <br>
                                                i śmiercionośnych pocisków rakietowych. Wyższy poziom odblokowywuje nowe <br>
                                                jednostki rakietowe oraz polepsza właściwości bojowe tych już odblokowanych.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[0]->balistics_level }}
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
                                                <img class="h-10 w-10" src="/images/intelligence.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Technologie wywiadowcze
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                Technologie wywiadowcze pozwaalają na tworzenie coraz lepszych urządzweń <br>
                                                pozwalających na przeprowadzanie elektronicznego wywiadu na terenie wroga. <br>
                                                Im wyższy poziom, tym skuteczniejsze w działaniu są drony szpiegowskie oraz <br>
                                                wyższa szansa na to, wrogie drony zostaną wykryte i unieszkodliwione.
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $researches[0]->intelligence_level }}
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
