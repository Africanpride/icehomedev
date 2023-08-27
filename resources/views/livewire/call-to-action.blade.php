<section>
    <div class="container py-16 px-4">
        <div
            class="flex flex-col items-center gap-4 rounded-lg bg-yellow-600 p-6 shadow sm:flex-row sm:justify-between">
            <strong class="text-xl text-white sm:text-xl">
                {{ $message }}
            </strong>

            <a class="inline-flex items-center gap-2 rounded-full border border-white bg-white px-8 py-3 text-yellow-600 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:bg-white/90"
                href="{{ $route ?? route('contact') }}">
                <span class="text-sm font-medium"> {{  $action }} </span>

                <x-lucide-arrow-right-from-line class="w-4 h-4 text-current" />
            </a>
        </div>
    </div>
</section>
