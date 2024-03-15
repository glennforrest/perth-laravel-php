<x-layout>
    <x-hero title="Perth Laravel PHP Meetup" subtitle="Let's come together to learn, inspire, and grow alongside like-minded individuals who are passionate about building robust and scalable web applications with Laravel.">
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

        <x-slot:after>
            <div class="xl:mx-auto xl:max-w-6xl xl:px-8">
                <img src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="People networking" class="aspect-[9/4] w-full object-cover object-top rounded-xl xl:rounded-3xl" />
            </div>
        </x-slot>
    </x-hero>

    <x-about />
    <x-laravel />
    <x-cta />
    <x-sponsors />
</x-layout>
