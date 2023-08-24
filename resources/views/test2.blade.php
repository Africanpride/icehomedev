<x-front-layout>

    <section class="hero-slider hero-style">
        <div class="swiper-container">
            <div class="swiper-wrapper ">

                <div class="swiper-slide z-20 p-4">
                    <div class="slide-inner slide-bg-image relative"
                        data-background="{{ asset('images/services/service015.jpg') }}">
                        <div class="absolute inset-0 bg-black/70 ">
                        </div>
                        <div class="container px-4 space-y-2 md:space-y-4">
                            <div data-swiper-parallax="300" class="">
                                <h2
                                    class="font-extrabold font-['inter'] text-4xl md:text-6xl tracking-wider uppercase max-w-5xl">
                                    {{ __('Explore Our Array of Project Showcases') }}
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="text-[inter] text-base md:text-2xl max-w-6xl">
                                <p> {{ __('Embark on a journey through our diverse project portfolio, a testament to our accomplishments, expertise, and unwavering commitment to excellence across various domains.') }}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <div class="flex gap-4 items-center">
                                    <x-button
                                        class="bg-yellow-500 dark:bg-yellow-500 md:w-auto px-5 py-3 text-white">{{ __('Railway Projects') }}</x-button>
                                    <a href="{{ url('projects') }}" class="theme-btn-s3"><i
                                            class="fas fa-chevron-circle-right"></i> Get
                                        Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <div class="swiper-slide z-20 p-4">
                    <div class="slide-inner slide-bg-image relative"
                        data-background="{{ asset('images/services/service046.jpg') }}">
                        <div class="absolute inset-0 bg-black/70 ">
                        </div>
                        <div class="container px-4 space-y-2 md:space-y-4">
                            <div data-swiper-parallax="300" class="">
                                <h2
                                    class="font-extrabold font-['inter'] text-4xl md:text-6xl tracking-wider uppercase max-w-5xl">
                                    {{ __('Explore Our Array of Project Showcases') }}
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="text-[inter] text-base md:text-2xl max-w-6xl">
                                <p> {{ __('Embark on a journey through our diverse project portfolio, a testament to our accomplishments, expertise, and unwavering commitment to excellence across various domains.') }}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <div class="flex gap-4 items-center">
                                    <x-button href="#"
                                        class="bg-yellow-500 dark:bg-yellow-500 md:w-auto px-5 py-3 text-white">{{ __('Railway Projects') }}</x-button>
                                    <a href="{{ url('projects') }}" class="theme-btn-s3"><i
                                            class="fas fa-chevron-circle-right"></i> Get
                                        Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
        </div>
    </section>
</x-front-layout>
