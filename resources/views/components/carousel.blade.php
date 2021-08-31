<div class="py-20 flex flex-col justify-center items-center">
    {{-- @dd(config('becker.rooms')) --}}
    <div class="relative" x-data="{ activeSlide: 1, slides: {{ json_encode(config('becker.rooms')) }} }" x-cloak>
        <!-- Slides -->
        <template x-for="slide in slides" :key="slide">
            <div x-show="activeSlide === slide.id" class="w-full">
                <div class="carousel-item">
                    <div class="shadow-lg">
                        <picture class="relative">
                            <source :srcset="`/images/${slide.image.name}.webp`" type="image/webp">
                            <img class="w-full" :src="`/images/${slide.image.name}.png`" alt="room" title="room"
                                height="640" width="860">
                        </picture>
                        <div
                            class="p-9 lg:h-80 flex flex-col items-center lg:absolute z-20 inset-x-0 bottom-0 bg-white bg-opacity-75">
                            <h2 x-text="slide.name" class="text-5xl text-gray20"></h2>
                            <div class="flex items-center space-x-4 md:space-x-8 my-9">
                                <div class="flex items-center">
                                    <img class="mr-2" height="30" width="30" src="/images/svg/users.svg"
                                        alt="">
                                    <p x-text="slide.description" class="text-3xl lg:text-3xl text-gray20"></p>
                                </div>
                                <div class="flex items-center">
                                    <img class="mr-2" height="30" width="30" src="/images/svg/cash.svg"
                                        alt="">
                                    <p x-text="slide.price" class="text-3xl lg:text-3xl text-gray20"></p>
                                </div>
                            </div>
                            <a :href="slide.href"
                                class="border hover:border-transparent border-gold99 text-gold99 hover:text-white hover:bg-gold99 bg-opacity-75  transition-colors ease-in duration-500 font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5 text-2xl lg:text-3xl uppercase shadow-sm focus:outline-none">
                                <span x-text="slide.name"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>


        <!-- Prev/Next Arrows -->
        <div class="inset-0 flex">
            <div class="flex items-center justify-start w-1/2">
                <button
                    class="w-16 h-16 ml-2 md:ml-10 absolute cursor-pointer text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 left-0 my-auto focus:outline-none"
                    @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    ‹
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button
                    class="w-16 h-16 mr-2 md:mr-10 absolute text-5xl font-bold text-gold99 hover:text-white rounded-full bg-white hover:bg-gold99 leading-tight text-center z-10 inset-y-0 right-0 my-auto focus:outline-none"
                    @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    ›
                </button>
            </div>
        </div>
    </div>

</div>
</div>
