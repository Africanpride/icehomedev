<x-front-layout>


    <section>
        <div class="relative">
            <img src="{{ asset('images/contruction.jpg') }}?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                class="absolute inset-0 object-cover w-full h-full" alt="" />
            <div class="relative bg-gray-900 bg-opacity-75">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">

                            <h2
                                class=" text-3xl sm:text-4xl text-yellow-500 font-extrabold font-['inter'] uppercase tracking-tight dark:text-slate-50 mb-3">
                                Reputed for exceptional construction, <span class="text-teal-accent-400">precision and
                                    trust.</span>
                            </h2>
                            <p class="max-w-3xl mb-4 text-base text-gray-200 md:text-lg">
                                {{ __('Over the years, we have built a strong reputation for delivering high-quality construction projects that meet and exceed client expectations. Our commitment to excellence and attention to detail have earned us the trust and loyalty of our clients, who rely on us for their most complex and demanding construction needs.') }}
                            </p>
                            <a href="{{ route('about') }}" aria-label=""
                                class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-yellow-400 hover:text-yellow-700">
                                {{ __('Learn more') }}
                                <x-lucide-chevron-right class="w-5 h-5 text-current font-extrabold" />
                            </a>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                    {{ __('Sign up for updates') }}
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

    <section class=" dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col items-center p-4 mx-auto space-y-6 md:p-24">
            <img src="{{ asset('images/helmet.svg') }}" class="w-32 h-32  " alt="">

            <p
                class="px-6 text-2xl font-semibold text-center sm:font-bold sm:text-3xl md:text-4xl lg:max-w-2xl xl:max-w-4xl dark:text-gray-300 text-['inter']">
                {{ __('                "ICE Home Development & Construction delivers exceptional construction, prioritizing quality, innovation, professionalism; fostering growth, forging enduring client partnerships."') }}
            </p>
            <div class=" justify-center space-x-3 flex">
                <img src="{{ asset('images/building2.jpg') }}" alt=""
                    class="w-20 h-20 bg-center bg-cover rounded-md  dark:bg-gray-700">
                <div>
                    <p class="leadi">Name of CEO/Board Chairman.</p>
                    <p class="text-sm leadi dark:text-gray-300">CEO, IceHomeDev</p>
                    <a class="flex items-center py-2 space-x-1 text-sm dark:text-violet-400"
                        href="{{ route('about') }}">
                        <span>Read IceHomeDev story</span>
                        <x-lucide-chevron-right class="text-current w-5 h-5" />
                    </a>
                </div>
            </div>
            {{-- </div> --}}
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
                                Financial Services
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
                                Construction Services
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



            </div>
            <!-- End Grid -->
        </div>


    </section>
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class=" flex flex-col-reverse mx-auto lg:flex-row">
            <div
                class="flex flex-col px-6 py-8 space-y-6 rounded-sm sm:p-8 lg:p-12 lg:w-1/2 xl:w-2/5 dark:bg-violet-400 bg-gray-200 dark:text-gray-900">
                <div class="flex space-x-2 sm:space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <p class="text-lg font-medium leadi">Lorem ipsum dolor sit amet</p>
                        <p class="leadi">Praesentium ea et neque distinctio quas eius repudiandae quaerat obcaecati
                            voluptatem similique!</p>
                    </div>
                </div>
                <div class="flex space-x-2 sm:space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <p class="text-lg font-medium leadi">Lorem ipsum dolor sit amet</p>
                        <p class="leadi">Praesentium ea et neque distinctio quas eius repudiandae quaerat obcaecati
                            voluptatem similique!</p>
                    </div>
                </div>
                <div class="flex space-x-2 sm:space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="flex-shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                        </path>
                    </svg>
                    <div class="space-y-2">
                        <p class="text-lg font-medium leadi">Lorem ipsum dolor sit amet</p>
                        <p class="leadi">Praesentium ea et neque distinctio quas eius repudiandae quaerat obcaecati
                            voluptatem similique!</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 xl:w-3/5 dark:bg-gray-800">
                <div class="flex items-center justify-center p-4 md:p-8 lg:p-12">
                    <img src="{{ asset('images/contruction2.jpg') }}" alt=""
                        class=" aspect-video rounded-lg shadow-lg dark:bg-gray-500  sm:min-h-96">
                </div>
            </div>
        </div>
    </section>

    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])
</x-front-layout>
