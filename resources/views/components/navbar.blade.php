<nav id="nav" x-data="{ open: false }" class="fixed z-50 w-full text-2xl font-medium bg-white shadow-md xl:text-3xl">
  <div class="px-8 py-6 lg:py-0 lg:px-6">
    <div class="flex items-center justify-between lg:justify-center lg:h-32">
      <div class="flex items-center justify-center">
        <div class="lg:mr-6">
          <a href="/" class="align-middle" title="beckerkuria-logo">
            <img height="60" width="186" src="/images/logo-gold.png" alt="beckerkuria-logo" title="beckerkuria-logo">
          </a>
        </div>
        
        <div class="items-center hidden uppercase navbar lg:flex xl:space-x-2">
          <a href="/#szallashelyek" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Szálláshelyek') }}
          </a>
          <a href="#etkezes" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Étkezés') }}
          </a>
          <a href="/#szolgaltatasok" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Szolgáltatások') }}
          </a>
          <a href="/#rolunk" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Rólunk') }}
          </a>
          <a href="/#kapcsolat" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Kapcsolat') }}
          </a>
          <a href="/hazirend" class="py-4 font-medium text-gold99 transition duration-300 ease-in-out text-opacity-75 px-7 lg:px-5 lg:py-14 lg:hover:text-gold99">
            {{ __('Házirend') }}
          </a>
          <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative hidden ml-48 text-right lg:inline-block">
            <div>
              <button type="button" class="inline-flex items-center justify-center w-full px-4 py-2 font-medium text-gray-700 text-2xl focus:outline-none" id="options-menu" aria-expanded="true" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open">
                <img  height="12.5" width="25" src="/images/flag/{{ LaravelLocalization::getCurrentLocale() }}.png" alt="flag" title="flag">
                <img x-show="!open" height="25" width="25" src="/images/svg/down-white.svg" alt="down-icon" title="down-icon">
                <img x-show="open" height="25" width="25" src="/images/svg/up-white.svg" alt="up-icon" title="up-icon">
                {{-- <svg class="w-5 h-5 ml-2 -mr-1" x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg> --}}
              </button>
            </div>
        
            <div x-show="open" x-transition:enter="transition ease-in duration-500" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 bg-white origin-top-right focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <div class="py-1" role="none">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="block px-4 py-2 text-2xl text-left text-gold99 text-opacity-75 lg:text-3xl hover:text-gold99" role="menuitem">
                                {{ $properties['native'] }}
                            </a>
                        @endif
                    @endforeach
                </div>  
            </div>
          </div>
        </div>
      </div>

      <div class="flex items-center lg:hidden">
            <button @click=" open = !open" class="p-2 lg:hidden focus:outline-none bg-gold99" title="menu">
                <img x-show="!open" class="z-20" width="35" height="35" src="/images/svg/menu.svg" alt="menu-open-icon" title="menu-open-icon">
                <img x-show="open" class="absolute top-0 right-0 z-50 mx-10 my-9" width="35" height="35" src="/images/svg/close.svg" alt="menu-close-icon" title="menu-close-icon">
            </button>
      </div>
    </div>
  </div>

  <div x-state:on="Menu open" x-state:off="Menu closed"  :class="{ 'block': open, 'hidden': !open }" class="absolute top-0 hidden w-full text-2xl leading-tight text-white bg-gold99 bg-gray26 md:text-3xl lg:hidden animation ">
    <div class="flex flex-col items-center justify-center h-screen text-3xl uppercase space-y-16">
      <a href="/#szallashelyek" class="block py-3 pl-3 pr-4 font-medium">{{ __('Szálláshelyek') }}</a>
      <a href="/#etkezes" @click="open = false" class="block py-3 pl-3 pr-4 font-medium">{{ __('Étkezés') }}</a>
      <a href="/#szolgaltatasok" class="block py-3 pl-3 pr-4 font-medium">{{ __('Szolgáltatások') }}</a>
      <a href="/#rolunk" class="block py-3 pl-3 pr-4 font-medium">{{ __('Rólunk') }}</a>
      <a href="/#kapcsolat" class="block py-3 pl-3 pr-4 font-medium">{{ __('Kapcsolat') }}</a>
      <a href="/hazirend" class="block py-3 pl-3 pr-4 font-medium">{{ __('Házirend') }}</a>
      <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative inline-block py-3 pl-5 pr-4 text-right">
        <div class="flex space-x-4">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              @if (LaravelLocalization::getCurrentLocale() != $localeCode)
                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      <img class="h-8 w-14" height="20" width="35" src="/images/flag/{{ $localeCode }}.png" alt="flag">
                  </a>
              @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</nav>
