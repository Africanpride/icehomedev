<x-front-layout>

    <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div
                    class="bg-yellow-600 p-8 md:p-12 lg:px-16 lg:py-24 rounded-2xl flex flex-col justify-center text-left">
                    <div class="mx-auto max-w-xl text-left">
                        <h2 class="text-2xl font-extrabold text-white md:text-2xl font-['poppins'] uppercase">
                            {{ __(' Overview of General Construction and Funds Provider Services (EPC and EPC+)') }}
                        </h2>

                        <p class="mt-4  sm:text-xl/relaxed leading-loose  font-['figtree']">
                            {{ __('We offer many services including residential, commercial, and industrial construction, infrastructure development, renovation, as well as project financing, equity, debt investment for construction projects.') }}
                        </p>

                        <div class="mt-4 md:mt-8">
                            <a href="#"
                                class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-yellow-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400">
                                Get Started Today
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <img alt="Student" src="{{ asset('images/building.jpg') }}"
                        class="h-40 w-full object-cover sm:h-56 md:h-full rounded-2xl" />

                    <img alt="Student" src="{{ asset('images/building2.jpg') }}"
                        class="h-40 w-full object-cover sm:h-56 md:h-full rounded-2xl" />
                </div>
            </div>
        </div>
    </section>

    <section class="sm:px-8 my-32">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <div class="max-w-4xl text-left">
                        <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl ">
                            47-year commitment to values, <br />innovation, quality projects.</h1>
                        <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                            {{ __('Throughout our 47-year journey, ICE Home Development and Construction has remained committed to our core values of integrity, professionalism, and client satisfaction. We continuously strive to stay ahead of industry trends and adopt innovative techniques and technologies to deliver projects of the highest quality, on time, and within budget.') }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('services-module')


    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])


</x-front-layout>
