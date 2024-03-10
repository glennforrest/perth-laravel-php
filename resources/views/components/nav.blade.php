<header class="z-50 sticky top-4 container">
    <nav class="my-6 flex items-center justify-between py-[14px] px-[50px] max-w-4xl mx-auto bg-[rgba(42,42,42,0.5)] backdrop-blur rounded-full" aria-label="Global">
        <div class="flex md:flex-1">
            <a href="/" class="-m-1.5 p-1.5 text-white transition duration-150 hover:opacity-80">
                <x-logo class="w-[80px] h-[45px] text-white" />
            </a>
        </div>

        <div class="hidden md:flex md:gap-x-12">
            <a href="#about" class="text-lg leading-[22px] text-white transition duration-150 hover:opacity-80">
                About
            </a>

            <a href="#laravel" class="text-lg leading-[22px] text-white transition duration-150 hover:opacity-80">
                Laravel
            </a>

            <a href="#sponsors" class="text-lg leading-[22px] text-white transition duration-150 hover:opacity-80">
                Sponsors
            </a>
        </div>

        <div class="flex flex-1 justify-end">
            <x-button theme="secondary" href="{{ config('app.meetup_url') }}" class="flex items-center space-x-3">
                <span>Join</span>

                <x-heroicon-s-arrow-long-right class="h-5 w-5 flex-none" />
            </x-button>
        </div>
    </nav>
</header>
