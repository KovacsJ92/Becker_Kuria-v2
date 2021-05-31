<div class="flex flex-col-reverse pt-20 md:flex-row">
    <div class="flex flex-col justify-start w-full px-8 mt-20 md:w-1/2 md:mt-0 md:justify-center md:items-center">
        <div class="flex flex-col items-start justify-center space-y-6">
            <h2 class="text-3xl font-semibold text-gray20">Elérhetőségek</h2>
            <div class="flex items-center">
                <img height="25" width="25" src="/images/svg/phone.svg" alt="">
                <a class="ml-4 text-2xl text-gray1e" href="tel:+36309440642" title="telefonszám">+36309440642</a>
            </div>
            <div class="flex items-center">
                <img height="25" width="25" src="/images/svg/mail.svg" alt="">
                <a class="ml-4 text-2xl text-gray1e" href="mailto:beckerkuria@gmail.com">beckerkuria@gmail.com</a>
            </div>
            <div class="flex items-center">
                <img height="25" width="25" src="/images/svg/map.svg" alt="">
                <a class="ml-4 text-2xl text-gray1e" href="https://www.google.hu/maps/place/Balatonszepezd,+%C3%81rp%C3%A1d+u.+9,+8252/@46.85214,17.6612123,17z/data=!3m1!4b1!4m5!3m4!1s0x4769af52b02a583b:0x340198bb1cc20f83!8m2!3d46.85214!4d17.663401">8252 Balatonszepezd Árpád utca 9.</a>
            </div>
        </div>
    </div>
    <div class="w-full px-8 md:w-1/2">
        @if (session('status'))
            <div class="p-4 rounded-md bg-green-50">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-2xl font-medium text-green-800">
                            {{ session('status') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <form action="{{ route('send-contact-mail') }}" method="POST">
            @csrf
            <div class="pt-10 pb-5">
                <h2 class="text-3xl font-semibold uppercase text-gray20">Időpont egyeztetés</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="full_name" class="block text-2xl text-gray20">Teljes név</label>
                    <div class="mt-1">
                        <input type="text" name="full_name" id="full_name" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="" required>
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-2xl text-gray20">Email cím</label>
                    <div class="mt-1">
                        <input type="text" name="email" id="email" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="" required>
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-2xl text-gray20">Telefonszám</label>
                    <div class="mt-1">
                        <input type="tel" name="phone" id="phone" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="" required>
                    </div>
                </div>
                <div>
                    <label for="subject" class="block text-2xl text-gray20">Tárgy</label>
                    <div class="mt-1">
                        <input type="text" name="subject" id="subject" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="" required>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <label for="message" class="block text-2xl text-gray20">Üzenet</label>
                    <textarea id="message" name="message" rows="4" class="block w-full px-4 py-3 text-xl border-gray1e border-opacity-80 " aria-describedby="message-max" required></textarea>
                </div>
            </div>
            <div class="flex justify-center mt-6">
                <button type="submit" class="border hover:border-transparent border-gold99 text-gold99 hover:text-white hover:bg-gold99 bg-opacity-75  transition-colors ease-in duration-500 font-medium items-center pt-3.5 px-8 xl:px-10 pb-2.5 text-2xl lg:text-3xl uppercase shadow-sm focus:outline-none">Küldés</button>
            </div>
        </form>
    </div>
</div>
