<x-front-layout>

    <section>
        <x-page-intro primaryColor="red" secondaryColor="text-red-100"
            firstImage="{{ asset('images/services/service038.jpg') }}"
            secondImage="{{ asset('images/services/service036.jpg') }}"
            svgImage="{{ asset('images/engineer-workers-icon.svg') }}"
            >
            <x-slot name="title"> {{ __('  Trusted excellence in complex construction Projects.') }}</x-slot>
            <x-slot name="content">
                {{ __('Over the years, we have built a strong reputation for delivering high-quality construction projects that meet and exceed client expectations. Our commitment to excellence and attention to detail have earned us the trust and loyalty of our clients, who rely on us for their most complex and demanding construction needs.') }}</x-slot>

        </x-page-intro>

    </section>

    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat hidden">
        <div class="absolute inset-0 bg-black/75 ">
        </div>

        <div
            class="relative mx-auto max-w-screen-xl px-4 py-28 sm:px-6 md:flex md:h-screen md:items-center md:px-8 text-white ">
            <div class="max-w-5xl ">
                <h1 class="text-4xl font-thin md:text-4xl font-['inter'] uppercase max-w-3xl">
                    About <span class="font-bold">ICE Home
                        <span class=" text-yellow-500">
                            Development and Construction
                        </span></span>
                </h1>

                <p class="mt-4  sm:text-xl/relaxed leading-loose  font-['figtree']">
                    Since our inception, ICE Home Development and Construction has successfully completed numerous
                    projects across various sectors, including residential, commercial, and industrial construction. Our
                    team of skilled professionals, including architects, engineers, project managers, and construction
                    workers, bring a wealth of expertise and knowledge to every project we undertake.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <div
                        class="block w-full rounded bg-yellow-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-yellow-700 focus:outline-none focus:ring active:bg-yellow-500 sm:w-auto">
                        Get Started
                    </div>

                    <div
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-yellow-600 shadow hover:text-yellow-700 focus:outline-none focus:ring active:text-yellow-500 sm:w-auto">
                        Learn More
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <x-project-intro />
    </section>

    <section class="hidden">
        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Tab Nav -->
            <nav class="max-w-6xl mx-auto grid grid-cols-2 sm:grid-cols-3 gap-2 sm:gap-4" aria-label="Tabs"
                role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700 active"
                    id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                    role="tab">
                    <span class="md:flex">
                        <svg class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 dark:hs-tab-active:text-blue-500 dark:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <span class="md:grow md:ml-5">
                            <span
                                class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">All-in-one
                                workspace</span>
                            <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Create a business,
                                whether you’ve got a fresh idea.</span>
                        </span>
                    </span>
                </button>

                <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700"
                    id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2"
                    role="tab">
                    <span class="md:flex">
                        <svg class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 dark:hs-tab-active:text-blue-500 dark:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                        </svg>
                        <span class="md:grow md:ml-5">
                            <span
                                class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Automation
                                on a whole new level</span>
                            <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Use automation to scale
                                campaigns profitably and save time doing it.</span>
                        </span>
                    </span>
                </button>

                <button type="button"
                    class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent text-center md:text-left hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700"
                    id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3"
                    role="tab">
                    <span class="md:flex">
                        <svg class="hidden md:block flex-shrink-0 md:mt-2 h-6 w-6 hs-tab-active:text-blue-600 text-gray-500 dark:hs-tab-active:text-blue-500 dark:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" />
                        </svg>
                        <span class="md:grow md:ml-5">
                            <span
                                class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Solving
                                problems for every team</span>
                            <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">One tool for your
                                company to share knowledge and ship projects.</span>
                        </span>
                    </span>
                </button>
            </nav>
            <!-- End Tab Nav -->

            <!-- Tab Content -->
            <div class="mt-12 md:mt-16">
                <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                    <!-- Devices -->
                    <div class="max-w-[1140px] lg:pb-32 relative">
                        <!-- Mobile Device -->
                        <figure
                            class="hidden absolute bottom-0 left-0 z-[2] max-w-full w-60 h-auto mb-20 ml-20 lg:block">
                            <div
                                class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-gray-700 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                                <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img9.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Mobile Device -->

                        <!-- Browser Device -->
                        <figure
                            class="ml-auto mr-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                            <div
                                class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex space-x-1 absolute top-2/4 left-4 -translate-y-1">
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                </div>
                                <div
                                    class="flex justify-center items-center w-full h-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-gray-700 dark:text-gray-200">
                                    www.preline.co</div>
                            </div>

                            <div class="bg-gray-800 rounded-b-lg">
                                <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img8.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Browser Device -->
                    </div>
                    <!-- End Devices -->
                </div>

                <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
                    <!-- Devices -->
                    <div class="max-w-[1140px] lg:pb-32 relative">
                        <!-- Mobile Device -->
                        <figure
                            class="hidden absolute bottom-0 left-0 z-[2] max-w-full w-60 h-auto mb-20 ml-20 lg:block">
                            <div
                                class="p-1.5 bg-gray-700 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                                <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img11.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Mobile Device -->

                        <!-- Browser Device -->
                        <figure
                            class="ml-auto mr-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                            <div
                                class="relative flex items-center max-w-[50rem] bg-gray-800 border-b border-gray-700 rounded-t-lg py-2 px-24">
                                <div class="flex space-x-1 absolute top-2/4 left-4 -translate-y-1">
                                    <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                                </div>
                                <div
                                    class="flex justify-center items-center w-full h-full bg-gray-700 text-[.25rem] text-gray-200 rounded-sm sm:text-[.5rem]">
                                    www.preline.co</div>
                            </div>

                            <div class="bg-gray-800 rounded-b-lg">
                                <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img10.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Browser Device -->
                    </div>
                    <!-- End Devices -->
                </div>

                <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
                    <!-- Devices -->
                    <div class="max-w-[1140px] lg:pb-32 relative">
                        <!-- Mobile Device -->
                        <figure
                            class="hidden absolute bottom-0 left-0 z-[2] max-w-full w-60 h-auto mb-20 ml-20 lg:block">
                            <div
                                class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-gray-700 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                                <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img13.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Mobile Device -->

                        <!-- Browser Device -->
                        <figure
                            class="ml-auto mr-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                            <div
                                class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex space-x-1 absolute top-2/4 left-4 -translate-y-1">
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                    <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                                </div>
                                <div
                                    class="flex justify-center items-center w-full h-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-gray-700 dark:text-gray-200">
                                    www.preline.co</div>
                            </div>

                            <div class="bg-gray-800 rounded-b-lg">
                                <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img12.jpg"
                                    alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Browser Device -->
                    </div>
                    <!-- End Devices -->
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Features -->
    </section>
    <section>
        <div class="max-w-screen-xl px-4 py-3 mx-auto sm:px-6 sm:py-6 md:px-8">

            <ul class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <li>
                    <div class="relative block group">
                        <img src="{{ asset('images/services/service033.jpg') }}" alt=""
                            class="object-cover w-full rounded-2xl transition duration-500 aspect-square" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Casual Trainers</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                               Bridge Construction
                            </span>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative block group">
                        <img src="{{ asset('images/construction.jpg') }}" alt=""
                            class="object-cover w-full  rounded-2xl transition duration-500 aspect-square" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Winter Jumpers</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Industrial Construction
                            </span>
                        </div>
                    </div>
                </li>

                <li class="md:col-span-2 md:col-start-2 md:row-span-2 md:row-start-1">
                    <div class="relative block group">
                        <img src="{{ asset('images/construction3.jpg') }}" alt=""
                            class="object-cover w-full  rounded-2xl transition duration-500 aspect-square" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Services</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Residential Construction
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])


</x-front-layout>
