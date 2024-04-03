<div id="sponsors" class="container py-8 md:py-20">
    <div class="flex flex-col items-center justify-center text-center gap-8">
        <div>
            <h2 class="text-2xl/none font-bold text-primary">
                Behind the Scenes
            </h2>

            <p class="text-3xl font-bold text-white sm:text-6xl tracking-[-3%]">
                Our Sponsors & Partners
            </p>
        </div>

        <div class="flex items-center flex-wrap gap-4">
            @foreach (config('app.sponsors') as $sponsor)
                <a href="{{ $sponsor['url'] }}" target="_blank" class="py-8 px-16 border border-stroke rounded-3xl group max-h-[100px] flex items-center">
                    <img
                        class="group-hover:opacity-80 transition duration-150"
                        src="{{ Vite::asset($sponsor['logo_path']) }}"
                        alt="{{ $sponsor['name'] }}"
                    />
                </a>
            @endforeach
        </div>

        <x-button href="mailto:{{ config('app.organiser.email') }}?Subject=Become a Sponsor" class="flex items-center space-x-3" target="_blank">
            <span>Become a Sponsor</span>

            <svg class="h-5 w-5 flex-none" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_600)">
                    <path d="M12.0862 2.00236L9.99999 0.922363L7.91374 2.00236L5.59124 2.35486L4.53874 4.45486L2.86749 6.10486L3.24999 8.42236L2.86749 10.7399L4.53874 12.3899L5.59124 14.4899L7.91374 14.8424L9.99999 15.9224L12.0862 14.8424L14.4087 14.4899L15.4612 12.3899L17.1325 10.7399L16.75 8.42236L17.1325 6.10486L15.4612 4.45486L14.4087 2.35486L12.0862 2.00236ZM13.5812 3.49361L14.4362 5.19986L15.7937 6.53986L15.4837 8.42236L15.7937 10.3049L14.4362 11.6449L13.5812 13.3511L11.6937 13.6374L9.99999 14.5149L8.30624 13.6374L6.41874 13.3511L5.56374 11.6449L4.20624 10.3049L4.51749 8.42236L4.20499 6.53986L5.56374 5.19986L6.41874 3.49361L8.30624 3.20736L9.99999 2.32986L11.695 3.20736L13.5812 3.49361Z" fill="white" />
                    <path d="M5 15.6648V20.9223L10 19.6723L15 20.9223V15.6648L12.4775 16.0473L10 17.3298L7.5225 16.0473L5 15.6648Z" fill="white" />
                </g>

                <defs>
                    <clipPath id="clip0_15_600">
                        <rect width="20" height="20" fill="white" transform="translate(0 0.922363)" />
                    </clipPath>
                </defs>
            </svg>
        </x-button>
    </div>
</div>
