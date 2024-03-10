<footer class="bg-[#151515] pt-16 md:pt-32 pb-16">
    <div class="container flex flex-col gap-24 text-lg leading-[22px] text-white">
        <div class="flex flex-col gap-8 items-center md:flex-row md:items-start md:justify-between">
            <a href="/" class="-m-1.5 p-1.5 flex flex-col gap-1 transition duration-150 hover:opacity-80">
                <x-logo class="w-[160px] h-[91px]" />

                <span>Perth Laravel Meetups</span>
            </a>

            <div class="flex gap-6">
                <a href="#about" class="transition duration-150 hover:text-white/80">
                    About
                </a>

                <a href="#laravel" class="transition duration-150 hover:text-white/80">
                    Laravel
                </a>

                <a href="#sponsors" class="transition duration-150 hover:text-white/80">
                    Sponsors
                </a>

                <a href="#code-of-conduct" class="transition duration-150 hover:text-white/80">
                    Code of Conduct
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-2 items-center md:flex-row md:items-end md:justify-between">
            <p>© {{ date('Y') }} Perth Laravel Meetups</p>

            <div>
                <a href="#privacy-policy" class="transition duration-150 hover:text-white/80">
                    Privacy Policy
                </a>

                <span>|</span>

                <a href="#terms-and-conditions" class="transition duration-150 hover:text-white/80">
                    Terms & Conditions
                </a>
            </div>
        </div>
    </div>
</footer>
