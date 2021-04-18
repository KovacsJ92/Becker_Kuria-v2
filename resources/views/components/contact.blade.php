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
                    <input type="text" name="full_name" id="full_name" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="">
                </div>
            </div>
            <div>
                <label for="email" class="block text-2xl text-gray20">Email cím</label>
                <div class="mt-1">
                    <input type="text" name="email" id="email" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="">
                </div>
            </div>
            <div>
                <label for="phone" class="block text-2xl text-gray20">Telefonszám</label>
                <div class="mt-1">
                    <input type="number" name="phone" id="phone" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="">
                </div>
            </div>
            <div>
                <label for="subject" class="block text-2xl text-gray20">Tárgy</label>
                <div class="mt-1">
                    <input type="text" name="subject" id="subject" class="block w-full text-xl border-gray1e border-opacity-80" placeholder="">
                </div>
            </div>
            <div class="md:col-span-2">
                <label for="message" class="block text-2xl text-gray20">Üzenet</label>
                <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full text-xl border-gray1e border-opacity-80 " aria-describedby="message-max"></textarea>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <x-button>Küldés</x-button>
        </div>
    </div>
</div>