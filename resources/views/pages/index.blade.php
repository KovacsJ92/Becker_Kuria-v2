@section('title') {{ __('Kezdőlap') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A part menti dombokra épült, erdők és hegyek ölelésében található Balatonszepezden várjuk múltszázadi hangulatú kúriánkba, pihenni vágyó vendégeinket. Az 1850-es években épült kúria, a falu központjában,a vízpart közelében,a templomkert szomszédságában korhű állapotában pompázik.') }}">
    <meta property="og:description" content="{{ __('A part menti dombokra épült, erdők és hegyek ölelésében található Balatonszepezden várjuk múltszázadi hangulatú kúriánkba, pihenni vágyó vendégeinket. Az 1850-es években épült kúria, a falu központjában,a vízpart közelében,a templomkert szomszédságában korhű állapotában pompázik.') }}">
    <meta property="og:url" content="https://beckerkuria.hu/"> 
@endsection

<x-layout>
    <div>
        <div class="h-header header-bg bg-no-repeat bg-cover bg-center flex flex-col items-center justify-center">
            <h2 class="text-5xl p-20 bg-gold99 bg-opacity-50 text-white uppercase text-center mt-36">Múlt századi hangulat,<br>mediterrán köntösben.</h2>
        </div>
    </div>
   
   <div id="szallashelyek" class="px-8 z-50 bg-white py-20">
        <x-section>
            <x-title>Szálláshelyek</x-title>
            <div class="md:flex md:justify-center">
                <x-carousel />
                {{-- <div class="carousel relative shadow-2xl bg-white mt-20 w-full md:w-2/3 ">
                    <div class="carousel-inner relative overflow-hidden">
                      <!--Slide 1-->
                      @foreach ($rooms = config('becker.rooms') as $key => $room)
                        <input class="carousel-open z-10 hidden" type="radio" id="carousel-{{ $loop->index }}" name="carousel" aria-hidden="true" hidden="" @if($loop->index == 0) checked="checked" @endif>
                        <div class="carousel-item absolute opacity-0">
                            <div class="shadow-lg">
                                <picture class="relative">
                                    <source srcset ="/images/{{ $room['image']['name']}}.webp" type="image/webp">
                                    <img class="w-full" src="/images/{{ $room['image']['name']}}.png" alt="room" title="room" height="640" width="860">
                                </picture>
                                <div class="p-9 lg:h-80 flex flex-col items-center lg:absolute z-20 inset-x-0 bottom-0 bg-white bg-opacity-75">
                                    <h2 class="text-5xl text-gray20">{{ $room['name'] }}</h2>
                                    <div class="flex items-center space-x-4 md:space-x-8 my-9">
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/users.svg" alt="">
                                            <p class="text-3xl lg:text-3xl text-gray20">{{ $room['description'] }}</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/cash.svg" alt="">
                                            <p class="text-3xl lg:text-3xl text-gray20">{{ $room['price'] }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route($room['route']) }}"  class="border hover:border-transparent border-gold99 text-gold99 hover:text-white hover:bg-gold99 bg-opacity-75  transition-colors ease-in duration-500 font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5 text-2xl lg:text-3xl uppercase shadow-sm focus:outline-none">
                                        {{ $room['name'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-{{ $room['label'] }}" class="prev control-{{ $loop->index }} w-16 h-16 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-{{ $room['label'] }}" class="next control-{{ $loop->index }} w-16 h-16 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                      @endforeach
                        
                    </div>
                </div> --}}
            </div>
        </x-section>
   </div>
   <div id="etkezes" class="bg-whitef8 px-8 py-20">
        <x-section >
            <x-title>étkezés</x-title>
            <div class=" py-20">
                <div class="flex flex-col lg:flex-row items-center justify-center">
                    <picture>
                        <source srcset ="/images/reggeli.webp" type="image/webp">
                        <img class="shadow-lg border border-gold99" src="/images/reggeli.png" alt="reggeli" title="reggeli" height="400" width="500">
                    </picture>
                    <div class="h-112 w-full md:w-200 lg:w-1/3 p-12 flex flex-col items-center justify-between bg-white shadow-lg">
                        <h2 class="text-5xl text-gray1e">Reggeli</h2>
                        <p class="text-3xl text-gray20 text-center">Reggeli a kúria melletti Szép Kávézóban igényelhető, egyéni fizetéssel.<br> Bővített kontinentális reggeli 3000Ft/fő</p>
                        <x-button><a href="https://www.facebook.com/Konyha-Kert-Bisztr%C3%B3-%C3%A9s-B%C3%A1r-1696944263733324">Menü</a></x-button>
                    </div>
                    {{-- <div class="h-72 lg:h-112 w-full md:w-144 p-6 lg:p-12 flex flex-col items-center justify-between bg-white shadow-lg lg:absolute xl:-bottom-20 xl:right-10">
                        <h2 class="text-2xl lg:text-5xl text-gray1e">Reggeli</h2>
                        <p class=" text-2xl lg:text-2xl text-gray20 text-center">Reggeli a kúria melletti Szép Kávézóban igényelhető, egyéni fizetéssel.<br> Bővített kontinentális reggeli 3000Ft/fő</p>
                        <x-button>Menü & a la carte</x-button>
                    </div> --}}
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-center mt-20">
                    <div class="order-last lg:order-first h-112 w-full md:w-200 lg:w-1/3 p-12 flex flex-col items-center justify-between bg-white shadow-lg">
                        <h2 class="text-5xl text-gray1e">Ebéd & vacsora</h2>
                        <p class="text-3xl text-gray20 text-center">A vízparti Konyhakert Bisztró és Bár –ban van lehetőség menü és a la carte étkezésre.</p>
                        <x-button><a href="https://www.facebook.com/Konyha-Kert-Bisztr%C3%B3-%C3%A9s-B%C3%A1r-1696944263733324">Menü & a la carte</a></x-button>
                    </div>
                    <picture>
                        <source srcset ="/images/konyhakert.webp" type="image/webp">
                        <img class="shadow-lg border border-gold99" src="/images/konyhakert.png" alt="konyhakertbistro" title="konyhakertbistro" height="400" width="500">
                    </picture>
                </div>
            </div>
        </x-section>
   </div>
   <div id="szolgaltatasok" class="bg-white">
        <x-section>
            <div class="block sm:hidden">
                <x-title>Szolgáltatások</x-title>
            </div>
            <div class="flex flex-col md:flex-row my-20 mx-10 shadow-lg">
                <div class="w-full lg:w-1/2 flex justify-center">
                    <picture class="relative">
                        <source srcset ="/images/cartoon.webp" type="image/webp">
                        <img class="w-full h-full"  height="600" width="700" src="/images/cartoon.png" alt="cartoon">
                    </picture>
                </div>
                <div class="w-full lg:w-1/2 order-first sm:order-last flex p-5 py-12 md:py-12 md:px-10 flex-col justify-center">
                    <div class="hidden sm:block">
                        <x-title>Szolgáltatások</x-title>
                    </div>
                    <div class="py-10 xl:py-20 flex items-center justify-evenly">
                        <div class="space-y-20">
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/parking.svg" alt="parking">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Ingyenes parkolás</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/bike.svg" alt="bike">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Kerékpárkölcsönzés</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/kayak.svg" alt="kayak">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Kajakkölcsönzés</p>
                            </div>
                        </div>
                        <div class="space-y-20">
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/wifi.svg" alt="wifi">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Ingyenes Wifi</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/television.svg" alt="television">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">4k Smart Tv</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/safe.svg" alt="safe">
                                <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Szobaszéf</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <img class="w-10" height="35" width="35" src="/images/svg/coffee.svg" alt="coffee">
                        <p class="text-xl lg:text-2xl xl:text-3xl ml-6 text-gray20">Reggeli igénylés</p>
                    </div>
                </div>
            </div>
        </x-section>
   </div>
   <div id="rolunk" class="bg-whitef8 py-20">
       <x-section>
        <x-title>Becker Kúria</x-title>
           <div class="flex flex-col md:flex-row  md:mx-10">
               <div class="flex flex-col md:justify-center w-full md:w-1/2">
                    <div class="pt-20 grid grid-cols-2 gap-4 md:gap-4">
                        <picture class="relative">
                            <source srcset ="/images/old.webp" type="image/webp">
                            <img class="h-full" height="200" width="420" src="/images/old.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old2.webp" type="image/webp">
                            <img class="h-full" height="200" width="420" src="/images/old2.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old3.webp" type="image/webp">
                            <img class="h-full" height="200" width="420" src="/images/old3.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old4.webp" type="image/webp">
                            <img class="h-full" height="200" width="420" src="/images/old4.png" alt="cartoon">
                        </picture>
                    </div>
               </div>
               <div class="w-full md:w-1/2 px-16">
                    <div class="space-y-4 mt-16 overscroll-auto  overflow-y-scroll  h-112 xl:h-full">
                        <h2 class="text-4xl mt-8 sm:mt-8 text-gray1e uppercase">Rólunk</h2>
                        <p class="text-2xl xl:text-3xl text-gray20">
                            A part menti dombokra épült, erdők és hegyek ölelésében található Balatonszepezden várjuk
                            múltszázadi hangulatú kúriánkba, pihenni vágyó vendégeinket. Az 1850-es években épült kúria, a falu
                            központjában,a vízpart közelében,a templomkert szomszédságában korhű állapotában pompázik.
                        </p>
                        <h2 class="text-4xl text-gray1e uppercase">Kúria története</h2>
                        <p class="text-2xl xl:text-3xl text-gray20">
                            Eredetileg Felsődörgicsei Nagy Pál (1832-†1891) háza volt, az1850-es években épült. Az ide látogató vendégekrõl 1887-ben már fürdővendégkönyvet vezettek. Felsődörgicsei Nagy Pál örökösei az épületet eladták Gróf Apponyi Henriknek (1885–1936), majd ő ajándékozta a kor ünnepelt szépségének, így lett „Becker Bäby ház”.
                        </p>
                        <p class="text-2xl xl:text-3xl text-gray20">
                            Bertha Bulcsu (1935-1997) Becker Bäby és a peszticidek c. könyvében a következőket írja: „A szepezdi főútra épült villát már gróf Apponyi Henrik ajándékozta a kor ünnepelt szépségének. A pletyka szerint gróf Apponyi Henrik feleségül akarta venni Becker Bäbyt, de végül nem ő, hanem Heinrich Antal, a gazdag vasgyáros vezette anyakönyvvezető elé.
                        </p>
                        <p class="text-2xl xl:text-3xl text-gray20">
                            Becker Bäby szepezdi villájába a jobb emberek persze a főkapun szoktak belépni… Urak, művészek, sportolók… A villa gyakori vendége volt a híres vívóbajnok, Petschauer Attila is." A későbbiekben az államosítás után, 70 évig szakszervezeti üdülőként működött. Teljes körű felújítás után, jelenleg panzióként üzemel.
                        </p>
                    </div>
               </div>
           </div>
       </x-section>
   </div>
   <div id="kapcsolat" class="bg-white py-20">
       <x-section>
           <x-title>kapcsolatok</x-title>
           <x-contact></x-contact>
       </x-section>
   </div>
</x-layout>
