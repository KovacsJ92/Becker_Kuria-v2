<div class="bg-gray20 bg-opacity-80 z-10 relative">
    <div class="container mx-auto pt-10 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-5 space-y-5 md:space-y-0 mb-10    ">
            <div class="md:col-span-2 flex items-center justify-center">
                <img height="60" width="186" src="/images/logo-white.png" alt="beckerkuria-logo">
            </div>
            <div class="space-y-5 flex flex-col items-center md:items-start"> 
                <h2 class="text-whitef8 text-2xl lg:text-3xl uppercase font-semibold">Szálláshelyek</h2>
                <a href="/szoba" class="text-white text-2xl">Szobák</a>
                <a href="/lakosztaly" class="text-white text-2xl">Lakosztály</a>
            </div>
            <div class="space-y-5 flex flex-col items-center md:items-start ">
                <h2 class="text-whitef8 text-2xl lg:text-3xl uppercase font-semibold">Információk</h2>
                <a href="/etkezes" class="text-white text-2xl">Étkezés</a>
                <a href="/szolgaltatsok" class="text-white text-2xl">Szolgáltatások</a>
                <div x-data="{ open: false }">
                    <button @click=" open = !open" class="focus:outline-none" title="menu">
                        <a x-show="!open"class="text-white text-2xl">Pályázat</a>
                        <img x-show="open" class="md:hidden absolute top-0 right-0 my-5 mx-10 z-50" width="35" height="35" src="/images/svg/close.svg" alt="menu-close-icon" title="menu-close-icon">
                        <img x-show="open" class="hidden md:block absolute top-0 right-0 my-5 mx-10 z-50" width="35" height="35" src="/images/svg/close-gray.svg" alt="menu-close-icon" title="menu-close-icon">
                    </button>
                    <div x-state:on="Menu open" x-state:off="Menu closed"  :class="{ 'block': open, 'hidden': !open }">
                        <picture class="hidden w-full md:block absolute top-0 right-0">
                            <source srcset ="/images/competition.webp" type="image/webp">
                            <img class="w-full" width="1411" height="315" src="/images/competition.png" alt="competition" title="Pályázat">
                        </picture>
                        <picture class="md:hidden absolute top-0 right-0">
                            <source srcset ="/images/competition-2.webp" type="image/webp">
                            <img class="w-full" width="411" height="481" src="/images/competition-2.png" alt="competition" title="Pályázat">
                        </picture>
                    </div>
                    
                </div>
            </div>
            <div class="space-y-5 flex flex-col items-center md:items-start">
                <h2 class="text-whitef8 text-2xl lg:text-3xl uppercase font-semibold">Kapcsolat</h2>
                <a href="/rolunk" class="text-white text-2xl">Rólunk</a>
                <a href="/lapcsolat" class="text-white text-2xl">Kapcsolat</a>
            </div>
        </div>
    </div>
    <div class="border-t border-white mt-5 md:mt-0 py-5 lg:py-10 flex items-center justify-center">
        <p class="text-white text-2xl">Copyright © 2021</p>
    </div>
</div>