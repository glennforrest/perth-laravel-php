<div class="flex flex-col p-12 gap-6 bg-dark-fill/50 rounded-3xl">
    <dt class="flex items-center gap-x-3 text-2xl/none font-bold text-white">
        {{ $heading }}
    </dt>

    <dd class="flex flex-auto flex-col text-lg/6 text-body">
        <p class="flex-auto">
            {{ $slot }}
        </p>
    </dd>
</div>
