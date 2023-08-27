<x-front-layout>

    <section>
        <x-page-intro primaryColor="yellow" secondaryColor="text-white" svgImage="{{ asset('images/helmet-white.svg') }}" >
            <x-slot name="title">  {{ __(' Overview of General Construction and Funds Provider Services (EPC and EPC+)') }}</x-slot>
            <x-slot name="content">                             {{ __('We offer many services including residential, commercial, and industrial construction, infrastructure development, renovation, as well as project financing, equity, debt investment for construction projects.') }}</x-slot>
        </x-page-intro>
    </section>

    <!-- component -->
    <section
    class="relative   bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/services/service014.jpg') }}');
    " >
    <div class="inset-0 bg-black/80 w-full h-full absolute z-0"></div>
    <div class="relative px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 z-10">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Throughout our 47-year journey, ICE Home Development and Construction has remained committed to our core values of integrity, professionalism, and client satisfaction. We continuously strive to stay ahead of industry trends and adopt innovative techniques and technologies to deliver projects of the highest quality, on time, and within budget.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>
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
