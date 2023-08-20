<x-front-layout>


    <section>
        <div class="relative">
            <img src="https://images.pexels.com/photos/3747463/pexels-photo-3747463.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                class="absolute inset-0 object-cover w-full h-full" alt="" />
            <div class="relative bg-gray-900 bg-opacity-75">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                            <h2
                                class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                                The quick, brown fox <br class="hidden md:block" />
                                jumps over a <span class="text-teal-accent-400">lazy dog</span>
                            </h2>
                            <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudan, totam rem aperiam, eaque ipsa quae.
                            </p>
                            <a href="/" aria-label=""
                                class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
                                Learn more
                                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                    <path
                                        d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                    Sign up for updates
                                </h3>
                                <form>
                                    <div class="mb-1 sm:mb-2">
                                        <label for="firstName" class="inline-block mb-1 font-medium">First name</label>
                                        <input placeholder="John" required="" type="text"
                                            class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                            id="firstName" name="firstName" />
                                    </div>
                                    <div class="mb-1 sm:mb-2">
                                        <label for="lastName" class="inline-block mb-1 font-medium">Last name</label>
                                        <input placeholder="Doe" required="" type="text"
                                            class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                            id="lastName" name="lastName" />
                                    </div>
                                    <div class="mb-1 sm:mb-2">
                                        <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                        <input placeholder="john.doe@icehomedev.com" required="" type="text"
                                            class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                            id="email" name="email" />
                                    </div>
                                    <div class="mt-4 mb-2 sm:mb-4">
                                        <x-button class="w-full  flex justify-center">{{ __('Subscribe') }}</x-button>
                                    </div>
                                    <p class="text-xs text-gray-600 sm:text-sm">
                                        We respect your privacy. Unsubscribe at any time.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
                <!-- Card -->
                <a class="group rounded-xl overflow-hidden" href="#">
                    <div class="sm:flex">
                        <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                alt="Image Description">
                        </div>

                        <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
                            <h3
                                class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
                                Studio by Preline
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">
                                Produce professional, reliable streams easily leveraging Preline's innovative broadcast
                                studio
                            </p>
                            <p
                                class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
                                Read more
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="group rounded-xl overflow-hidden" href="#">
                    <div class="sm:flex">
                        <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80"
                                alt="Image Description">
                        </div>

                        <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
                            <h3
                                class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
                                Onsite
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">
                                Optimize your in-person experience with best-in-class capabilities like badge printing
                                and
                                lead retrieval
                            </p>
                            <p
                                class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
                                Read more
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="group rounded-xl overflow-hidden" href="#">
                    <div class="sm:flex">
                        <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1567016526105-22da7c13161a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                                alt="Image Description">
                        </div>

                        <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
                            <h3
                                class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
                                The complete guide to OKRs
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">
                                How to make objectives and key results work for your company
                            </p>
                            <p
                                class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
                                Read more
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="group rounded-xl overflow-hidden" href="#">
                    <div class="sm:flex">
                        <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 left-0 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                alt="Image Description">
                        </div>

                        <div class="grow mt-4 sm:mt-0 sm:ml-6 px-4 sm:px-0">
                            <h3
                                class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-300 dark:group-hover:text-white">
                                People program models
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">
                                Six approaches to bringing your People strategy to life
                            </p>
                            <p
                                class="mt-4 inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium">
                                Read more
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>


    </section>
    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])
</x-front-layout>
