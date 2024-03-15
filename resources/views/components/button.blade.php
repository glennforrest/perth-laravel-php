@props([
    'theme' => 'primary',
])

<a {{ $attributes->class([
    'border transition duration-150 rounded-[200px] px-8 py-[14px] text-base/5 text-white focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2',
    'font-bold border-transparent bg-primary hover:bg-primary/80 focus-visible:outline-primary' => $theme === 'primary',
    'font-semibold border-white hover:bg-white hover:text-black focus-visible:outline-white' => $theme === 'secondary',
]) }} {{ $attributes }}>{{ $slot }}</a>
