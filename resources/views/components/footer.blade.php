<footer class="bg-[#151515] pt-16 md:pt-32 pb-16">
    <div class="container flex flex-col gap-24 text-lg leading-[22px] text-white">
        <div class="flex flex-col gap-24 md:gap-8 items-center md:flex-row md:items-start md:justify-between">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5 flex flex-col gap-1 transition duration-150 hover:opacity-80">
                <x-logo class="w-[160px] h-[91px]" />

                <span>Perth Laravel Meetups</span>
            </a>

            <div class="flex flex-col items-center text-center gap-6 md:flex-row">
                <a href="/#about" class="transition duration-150 hover:text-white/80">
                    About
                </a>

                <a href="/#laravel" class="transition duration-150 hover:text-white/80">
                    Laravel
                </a>

                <a href="/#sponsors" class="transition duration-150 hover:text-white/80">
                    Sponsors
                </a>

                <a href="{{ route('code-of-conduct') }}" class="transition duration-150 hover:text-white/80">
                    Code of Conduct
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-2 items-center md:flex-row md:items-end md:justify-between">
            <p>© {{ date('Y') }} {{ config('app.name') }}</p>

            <div>
                <a href="{{ route('privacy-policy') }}" class="transition duration-150 hover:text-white/80">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>
</footer>
