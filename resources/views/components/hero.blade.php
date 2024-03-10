<div class="relative py-24 flex flex-col space-y-32 container">
    <div style="background: radial-gradient(52.79% 50% at 50% 50%, rgba(183, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0) 98%)" class="-z-10 absolute inset-0 opacity-75"></div>

    <div class="mx-auto max-w-4xl">
        <div class="text-center flex flex-col items-center justify-center space-y-3">
            <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0489 16.9815L1.06451 9.25126M15.0489 16.9815V33M15.0489 16.9815L28.9355 9.25126M1.06451 9.25126V25.0054L15.0489 33M1.06451 9.25126L15.0489 1L28.9355 9.25126M28.9355 9.25126V25.0054L15.0489 33" stroke="white" stroke-width="1.25" stroke-linejoin="round" />
            </svg>

            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-[80px] sm:leading-[102px] sm:tracking-[-3%]">
                Perth Laravel PHP Meetup
            </h1>

            <p class="text-lg/6 text-body max-w-[636px]">
                Let's come together to learn, inspire, and grow alongside like-minded individuals who are passionate about building robust and scalable web applications with Laravel.
            </p>
        </div>

        <div class="mt-9 flex flex-col gap-4 md:flex-row items-center justify-center md:gap-9">
            <x-button href="{{ config('app.meetup_url') }}" class="flex items-center space-x-3" target="_blank">
                <span>Become a Member</span>

                <x-heroicon-s-users class="h-5 w-5 flex-none" />
            </x-button>

            <x-button theme="secondary" href="#about" class="flex items-center space-x-3">
                <span>Read More</span>

                <x-heroicon-s-arrow-long-right class="h-5 w-5 flex-none" />
            </x-button>
        </div>
    </div>

    <div class="xl:mx-auto xl:max-w-6xl xl:px-8">
        <img src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="People networking" class="aspect-[9/4] w-full object-cover object-top rounded-xl xl:rounded-3xl" />
    </div>
</div>
