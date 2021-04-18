@section('title') {{ __('Lakosztály') }} @endsection

@section('meta_data')
    <meta name="description" content="{{ __('A kúriában 3 darab, 35-45 nm közötti, két légteres lakosztály található, melyekhez 3-5 nm-es zuhanyzós fürdőszoba tartozik. A hálószobában kétszemélyes franciaágy, míg a nappaliban kihúzható kanapé van elhelyezve, mely maximum két, 14 éven aluli személy számára vehető igénybe. A teraszon kerti garnitúra található.
    A feltüntetett árak az idegenforgalmi és áruforgalmi adót tartalmazzák.') }}">
    <meta property="og:description" content="{{ __('A kúriában 3 darab, 35-45 nm közötti, két légteres lakosztály található, melyekhez 3-5 nm-es zuhanyzós fürdőszoba tartozik. A hálószobában kétszemélyes franciaágy, míg a nappaliban kihúzható kanapé van elhelyezve, mely maximum két, 14 éven aluli személy számára vehető igénybe. A teraszon kerti garnitúra található.
    A feltüntetett árak az idegenforgalmi és áruforgalmi adót tartalmazzák.') }}">
    <meta property="og:url" content="https://beckerkuria.hu/hu/szoba"> 
@endsection

<x-layout>
    <div class="pt-36">
        <x-section>
            <div class="text-center space-y-3">
                <p class="text-gold99 text-lg lg:text-xl">Becker Kúria</p>
                <h1 class="text-gold99 text-5xl lg:text-6xl uppercase font-semibold tracking-wider">Lakosztály</h1>
            </div>
            <div class="flex justify-center">
                <p class="py-10 text-3xl text-gray20 w-2/3 text-center">A kúriában 3 darab, 35-45 nm közötti, két légteres lakosztály található, melyekhez 3-5 nm-es zuhanyzós fürdőszoba tartozik. A hálószobában kétszemélyes franciaágy, míg a nappaliban kihúzható kanapé van elhelyezve, mely maximum két, 14 éven aluli személy számára vehető igénybe. A teraszon kerti garnitúra található.
                    A feltüntetett árak az idegenforgalmi és áruforgalmi adót tartalmazzák. Az ár az étkezéseket nem tartalmazza.</p>
            </div>
            <div class="flex justify-center pt-10 pb-20">
                <div class="carousel-inner relative overflow-hidden w-full md:w-2/3 shadow-xl">
                    @foreach (config('gallery.suites') as $suite)
                        
                      <input class="carousel-open z-10 hidden" type="radio" id="carousel-{{ $loop->index }}" name="carousel" aria-hidden="true" hidden="" @if($loop->index == 0) checked="checked" @endif>
                      <div class="carousel-item absolute opacity-0">
                          <div class="shadow-lg">
                              <picture class="relative">
                                  <source srcset ="/images/{{ $suite['name']}}.webp" type="image/webp">
                                  <img class="w-full" src="/images/{{ $suite['name']}}.png" alt="{{ $suite['alt']}}" title="{{ $suite['title']}}" height="640" width="860">
                              </picture>
                          </div>
                      </div>
                      <label for="carousel-{{ $suite['label'] }}" class="prev control-{{ $loop->index }} w-16 h-16 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                      <label for="carousel-{{ $suite['label'] }}" class="next control-{{ $loop->index }} w-16 h-16 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                    @endforeach
                </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-2/3 text-gold99 text-3xl md:text-4xl uppercase">
                    <div class="flex flex-col items-center justify-center space-y-5">
                        <p class="">Szoba</p>
                        <p class="lg:text-5xl align-middle">2</p>
                    </div>
                    <div class="flex flex-col items-center justify-around  space-y-5">
                        <p class="">Férőhely</p>
                        <p class="lg:text-5xl align-middle">2-4</p>
                    </div>
                    <div class="flex flex-col items-center justify-around  space-y-5">
                        <p class="">Terület</p>
                        <p class="lg:text-5xl normal-case align-middle">35-45m²</p>
                    </div>
                    <div class="flex flex-col items-center justify-around  space-y-5">
                        <p class="normal-case">ÁR(2fő/éj)</p>
                        <p class="lg:text-5xl normal-case align-middle">50.000 Ft</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center pt-20 px-8">
                <div class="w-full md:w-2/3">
                    <h2 class="text-center text-5xl text-gold99">Szobafelszereltség</h2>
                    <div class="py-20 grid grid-cols-2 md:grid-cols-4 gap-10">
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5" src="/images/svg/bathroom.svg" alt="Fürdõszoba" title="Fürdõszoba">
                            <p class="text-2xl lg:text-3xl text-gray20">Fürdőszoba</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5" src="/images/svg/shower.svg" alt="Zuhany" title="Zuhany">
                            <p class="text-2xl lg:text-3xl text-gray20">Zuhany</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5" src="/images/svg/toilet.svg" alt="WC" title="WC">
                            <p class="text-2xl lg:text-3xl text-gray20">WC</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5" src="/images/svg/hair-dryer.svg" alt="Hajszárító" title="Hajszárító">
                            <p class="text-2xl lg:text-3xl text-gray20">Hajszárító</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5" src="/images/svg/towel.svg" alt="Törölköző" title="Törölköző">
                            <p class="text-2xl lg:text-3xl text-gray20">Törölköző</p>
                        </div>
                        <div class=" flex items-center justify-start">
                            <img class="w-10 mr-5" src="/images/svg/television.svg" alt="4k Smart TV" title="4k Smart TV">
                            <p class="text-2xl lg:text-3xl text-gray20">4k Smart TV</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/electric-kettle.svg" alt="Vízforraló" title="Vízforraló">
                            <p class="text-2xl lg:text-3xl text-gray20">Vízforraló</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/coffee-cup.svg" alt="Kapszulás kávéfőző" title="Kapszulás kávéfőző">
                            <p class="text-2xl lg:text-3xl text-gray20">Kapszulás kávéfőző</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/toaster.svg" alt="Pirítós sütő" title="Pirítós sütő">
                            <p class="text-2xl lg:text-3xl text-gray20">Pirítós sütő</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/fridge.svg" alt="Hűtőszekrény" title="Hűtőszekrény">
                            <p class="text-2xl lg:text-3xl text-gray20">Hűtőszekrény</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/restaurant.svg" alt="Tányérok, evőeszközök" title="Tányérok, evőeszközök">
                            <p class="text-2xl lg:text-3xl text-gray20">Tányérok, evőeszközök</p>
                        </div>
                        <div class=" flex items-center justify-start ">
                            <img class="w-10 mr-5 text-gold99" src="/images/svg/wine-glass.svg" alt="Poharak" title="Poharak">
                            <p class="text-2xl lg:text-3xl text-gray20">Poharak</p>
                        </div>
                    </div>
                </div>
            </div>
            <x-contact></x-contact>
        </x-section>
    </div>
    
</x-layout>