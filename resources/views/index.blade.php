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
   
   <div class="px-8 z-50 bg-white">
        <x-section>
            <x-title>Szálláshelyek</x-title>
            <div class="md:flex md:justify-center">
                <div class="carousel relative shadow-2xl bg-white mt-20 w-full md:w-2/3 ">
                    <div class="carousel-inner relative overflow-hidden">
                      <!--Slide 1-->
                        <input class="carousel-open z-10 hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0">
                            <div class="shadow-lg">
                                <picture class="relative">
                                    <source srcset ="/images/szoba.webp" type="image/webp">
                                    <img class="w-full" src="/images/szoba.png" alt="room" title="room" height="640" width="860">
                                </picture>
                                <div class="p-9 lg:h-80 flex flex-col items-center lg:absolute z-50 inset-x-0 bottom-0 bg-white bg-opacity-75">
                                    <h2 class="text-6xl text-gray20">Szoba</h2>
                                    <div class="flex items-center space-x-4 md:space-x-8 my-9">
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/users.svg" alt="">
                                            <p class="text-3xl lg:text-4xl text-gray20">2 Vendég</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/cash.svg" alt="">
                                            <p class="text-3xl lg:text-4xl text-gray20">36.000 Ft-tól</p>
                                        </div>
                                    </div>
                                    <x-button>részletek</x-button>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-2" class="prev control-1 w-16 h-16 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-16 h-16 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                        
                        <!--Slide 2-->
                        <input class="carousel-open z-10 hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0">
                            <div class="shadow-lg">
                                <picture class="relative">
                                    <source srcset ="/images/lakosztaly.webp" type="image/webp">
                                    <img class="w-full" src="/images/lakosztaly.png" alt="room" title="room" height="640" width="860">
                                </picture>
                                <div class="p-9 lg:h-80 flex flex-col items-center lg:absolute z-50 inset-x-0 bottom-0 bg-white bg-opacity-75">
                                    <h2 class="text-6xl text-gray20">Lakosztály</h2>
                                    <div class="flex items-center space-x-4 md:space-x-8 my-9">
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/users.svg" alt="">
                                            <p class="text-3xl lg:text-4xl text-gray20">2-4 Vendég</p>
                                        </div>
                                        <div class="flex items-center">
                                            <img class="mr-2" height="30" width="30" src="/images/svg/cash.svg" alt="">
                                            <p class="text-3xl lg:text-4xl text-gray20">50.000 Ft-tól</p>
                                        </div>
                                    </div>
                                    <x-button>részletek</x-button>
                                </div>
                            </div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-16 h-16 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-2 w-16 h-16 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                    </div>
                </div>
            </div>
        </x-section>
   </div>
   <div class="bg-whitef8 px-8">
        <x-section>
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
                        <x-button>Menü</x-button>
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
                        <x-button>Menü & a la carte</x-button>
                    </div>
                    <picture>
                        <source srcset ="/images/konyhakert.webp" type="image/webp">
                        <img class="shadow-lg border border-gold99" src="/images/konyhakert.png" alt="konyhakertbistro" title="konyhakertbistro" height="400" width="500">
                    </picture>
                </div>
            </div>
        </x-section>
   </div>
   <div class="bg-white">
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
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Ingyenes parkolás</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/bike.svg" alt="">
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Kerékpárkölcsönzés</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/kayak.svg" alt="">
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Kajakkölcsönzés</p>
                            </div>
                        </div>
                        <div class="space-y-20">
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/wifi.svg" alt="">
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Ingyenes Wifi</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/television.svg" alt="">
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">4k Smart Tv</p>
                            </div>
                            <div class="flex items-center">
                                <img class="w-10" height="35" width="35" src="/images/svg/safe.svg" alt="">
                                <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Szobaszéf</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <img class="w-10" height="35" width="35" src="/images/svg/coffee.svg" alt="">
                        <p class="text-xl lg:text-2xl xl:text-4xl ml-6 text-gray20">Reggeli igénylés</p>
                    </div>
                </div>
            </div>
        </x-section>
   </div>
   <div class="bg-whitef8">
       <x-section>
        <x-title>Becker Kúria</x-title>
           <div class="flex flex-col md:flex-row  md:mx-10">
               <div class="flex flex-col md:justify-center w-full md:w-1/2">
                    <div class="pt-20 grid grid-cols-2 gap-4 md:gap-4">
                        <picture class="relative">
                            <source srcset ="/images/old.webp" type="image/webp">
                            <img   height="315" width="420" src="/images/old.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old2.webp" type="image/webp">
                            <img   height="272" width="420" src="/images/old2.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old3.webp" type="image/webp">
                            <img   height="274" width="420" src="/images/old3.png" alt="cartoon">
                        </picture>
                        <picture class="relative">
                            <source srcset ="/images/old4.webp" type="image/webp">
                            <img   height="245" width="420" src="/images/old4.png" alt="cartoon">
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
   <div class="bg-white">
       <x-section>
           <x-title>kapcsolatok</x-title>
           <div class="flex flex-col-reverse md:flex-row">
                <div class="w-full md:w-1/2 mt-20 md:mt-0 px-8 flex flex-col justify-start md:justify-center md:items-center">
                    <div class="space-y-6 flex flex-col justify-center items-start">
                        <h2 class="text-3xl font-semibold text-gray20">Elérhetőségek</h2>
                        <div class="flex items-center">
                            <img height="25" width="25" src="/images/svg/phone.svg" alt="">
                            <a class="text-2xl text-gray1e ml-4" href="tel:+36309440642" title="telefonszám">+36309440642</a>
                        </div>
                        <div class="flex items-center">
                            <img height="25" width="25" src="/images/svg/mail.svg" alt="">
                            <a class="text-2xl text-gray1e ml-4" href="mailto:beckerkuria@gmail.com">beckerkuria@gmail.com</a>
                        </div>
                        <div class="flex items-center">
                            <img height="25" width="25" src="/images/svg/map.svg" alt="">
                            <a class="text-2xl text-gray1e ml-4" href="https://www.google.hu/maps/place/Balatonszepezd,+%C3%81rp%C3%A1d+u.+9,+8252/@46.85214,17.6612123,17z/data=!3m1!4b1!4m5!3m4!1s0x4769af52b02a583b:0x340198bb1cc20f83!8m2!3d46.85214!4d17.663401">8252 Balatonszepezd Árpád utca 9.</a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-8">
                    <div class="pt-10 pb-5">
                        <h2 class="text-3xl uppercase font-semibold text-gray20">Időpont egyeztetés</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="full_name" class="block text-2xl text-gray20">Teljes név</label>
                            <div class="mt-1">
                                <input type="text" name="full_name" id="full_name" class="block w-full text-xl border-gray1e" placeholder="">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-2xl text-gray20">Email cím</label>
                            <div class="mt-1">
                                <input type="text" name="email" id="email" class="block w-full text-xl border-gray1e" placeholder="">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-2xl text-gray20">Telefonszám</label>
                            <div class="mt-1">
                                <input type="number" name="phone" id="phone" class="block w-full text-xl border-gray1e" placeholder="">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-2xl text-gray20">Tárgy</label>
                            <div class="mt-1">
                                <input type="text" name="subject" id="subject" class="block w-full text-xl border-gray1e" placeholder="">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label for="message" class="block text-2xl text-gray20">Üzenet</label>
                            <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full text-xl border-gray1e" aria-describedby="message-max"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <x-button>Küldés</x-button>
                    </div>
                </div>
           </div>
       </x-section>
   </div>
</x-layout>
