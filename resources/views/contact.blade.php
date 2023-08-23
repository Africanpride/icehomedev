<x-front-layout>
    <!-- Contact Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl lg:max-w-5xl mx-auto space-y-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800 sm:text-5xl dark:text-white">
                    Contact us
                </h1>
                <p class="mt-1 text-gray-600 dark:text-gray-400 max-w-xl container text-xl">
                    {{ __('Reach out to us for a discussion on how we can assist you. We\'re eager to explore ways to provide our support.') }}
                </p>

            </div>

            <section class="relative container md:p-4">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.749668840561!2d38.78247777395977!3d8.995167089519816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b84fdf566b8a9%3A0x3cfc05836ed024a4!2zR3VsZiBBeml6IEJ1aWxkaW5nIHwgQm9sZSBNZWRoYW5pYWxlbSB8IOGMjuGIjeGNjSDhiqDhi7LhiLUg4YiF4YqV4Y2DIHwg4Ymm4YiMIOGImOGLteGIg-GKkuGKoOGIiOGInQ!5e0!3m2!1sen!2sgh!4v1692618527732!5m2!1sen!2sgh"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div
                    class="md:absolute bottom-0 left-0 right-0  text-center mx-auto md:p-6 md:left-auto md:text-left md:mx-0 py-4">
                    <!-- Card -->
                    <div
                        class="bg-gray-200 dark:bg-gray-800 rounded-lg text-[13px] md:p-5 p-3
                    grid grid-cols-4 gap-2 w-full md:w-auto place-items-center">
                        <div class=" dark:text-gray-200 text-gray-800 !text-left col-span-3 ">
                            <span>
                                <h1 class="font-extrabold text-lg text-left">Address</h1>
                            </span>
                            <span class="text-firefly-500 text-sm"> Gulf Aziz Bldg. Office No 307,
                                <br /> Bole Sub –City
                                Addis Ababa, <br />Ethiopia.
                            </span>

                        </div>

                        <div class="col-span-1 w-16 ">
                            <img src="{{ asset('images/address.png') }}" alt="" class="h-16 w-16">
                        </div>



                    </div>
                    <!-- End Card -->
                </div>
            </section>

            <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
                <!-- Card -->
                <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700/50 ">
                    <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                        Fill in the form
                    </h2>

                    <form>
                        <div class="grid gap-4">
                            <!-- Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
                                    <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700/50  dark:text-gray-400"
                                        placeholder="First Name">
                                </div>

                                <div>
                                    <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
                                    <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700/50  dark:text-gray-400"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div>
                                <label for="hs-email-contacts-1" class="sr-only">Email</label>
                                <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1"
                                    autocomplete="email"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700/50  dark:text-gray-400"
                                    placeholder="Email">
                            </div>

                            <div>
                                <label for="hs-phone-number-1" class="sr-only">Phone Number</label>
                                <input type="text" name="hs-phone-number-1" id="hs-phone-number-1"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700/50  dark:text-gray-400"
                                    placeholder="Phone Number">
                            </div>

                            <div>
                                <label for="hs-about-contacts-1" class="sr-only">Details</label>
                                <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700/50  dark:text-gray-400"
                                    placeholder="Details"></textarea>
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div class="mt-4 grid">
                            <x-button type="submit"
                                class=" dark:bg-gray-950 dark:text-gray-400">{{ __('Send Enquiries') }}</x-button>
                        </div>

                        <div class="mt-3 text-center">
                            <p class="text-sm text-gray-500">
                                We'll get back to you in 1-2 business days.
                            </p>
                        </div>
                    </form>
                </div>
                <!-- End Card -->

                <div class="divide-y divide-gray-200 dark:divide-gray-800">

                    <!-- Icon Block -->
                    <div class="flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Office Location</h3>
                            <p class="mt-1 text-sm text-gray-500">Gulf Aziz Bldg. Office No 307, Bole Sub –City Addis Ababa, Ethiopia</p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="https://goo.gl/maps/ByZUgRsnre7R6e4H9">
                                Find MAP
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Knowledgebase</h3>
                            <p class="mt-1 text-sm text-gray-500">We're here to help with any questions.</p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                Contact support
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- End Icon Block -->


                    <!-- Icon Block -->
                    <div class=" flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Reach Hotlines</h3>
                            <p class="mt-1 text-sm text-gray-500">Tel: +251944245965, +251926781900</p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                Contact sales
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class=" flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Contact us by email</h3>
                            <p class="mt-1 text-sm text-gray-500">If you wish to write us an email instead please use
                            </p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="mailto:info@icehomedev.com">
                                info@icehomedev.com
                            </a>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->

    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])


</x-front-layout>
