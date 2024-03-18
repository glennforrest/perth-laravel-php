@props([
    'title',
    'subtitle' => null,
    'after' => null,
])

<div class="relative py-16 space-y-16 md:py-24 flex flex-col md:space-y-32 container">
    <div style="background: radial-gradient(52.79% 50% at 50% 50%, rgba(183, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0) 98%)" class="-z-10 absolute inset-0 opacity-75"></div>

    <div class="mx-auto max-w-4xl !mt-0">
        <div class="text-center flex flex-col items-center justify-center space-y-3">
            <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0489 16.9815L1.06451 9.25126M15.0489 16.9815V33M15.0489 16.9815L28.9355 9.25126M1.06451 9.25126V25.0054L15.0489 33M1.06451 9.25126L15.0489 1L28.9355 9.25126M28.9355 9.25126V25.0054L15.0489 33" stroke="white" stroke-width="1.25" stroke-linejoin="round" />
            </svg>

            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-[80px] sm:leading-[102px] sm:tracking-[-3%]">
                {{ $title }}
            </h1>

            @if($subtitle)
                <p class="text-lg/6 text-body max-w-[636px]">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        {{ $slot }}
    </div>

    @if ($after)
        {{ $after }}
    @endif
</div>
