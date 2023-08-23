@props([
    'firstImage' => 'images/services/service040.jpg',
    'secondImage' => 'images/services/service039.jpg',
    'thirdImage' => 'images/services/service038.jpg',
    'fourthImage' => 'images/services/service037.jpg',
])

<div>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
<div class="space-y-6">
<div class="rounded-full w-24 h-24 bg-[#F59E0B]/10 grid place-items-center ">
    <img src="{{ asset('images/builder.svg') }}" class="w-16 h-16 p-2 " alt="">
</div>

    <div>

        <h2 class="text-xl font-extrabold text-gray-900 sm:text-3xl uppercase">
            {{ $title ?? 'Explore Our Project Portfolio' }}
        </h2>


        <p class="max-w-4xl my-4 text-gray-500 text-xl">
            {{ $introduction ?? 'Explore our comprehensive project portfolio ranging from Railways Construction, Residential, Commercial, and Industrial Construction to Infrastructure Development, Renovation, and Remodeling – we excel in crafting quality spaces. In addition, our Financial Services encompass Project Financing, Equity Investment, Debt Financing, and Funding Solutions for Construction Projects.' }}
        </p>
    </div>
</div>

        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
            <li>
                <a href="#" class="block overflow-hidden group">
                    <img src="{{ $firstImage }}"
                        alt=""
                        class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                    <div class="relative pt-3 bg-white p-2">
                        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                            Inter-Sahara <br />Railways Construction
                        </h3>

                        <p class="mt-2">
                            <span class="sr-only">Railway Construction </span>


                            <span class="tracking-wider text-gray-900"> Railway Construction </span>
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block overflow-hidden group">
                    <img src="{{ $secondImage }}"
                        alt=""
                        class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                    <div class="relative pt-3 bg-white p-2">
                        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                            Inter-Sahara <br />Railways Construction
                        </h3>

                        <p class="mt-2">
                            <span class="sr-only">Railway Construction </span>


                            <span class="tracking-wider text-gray-900"> Railway Construction </span>
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block overflow-hidden group">
                    <img src="{{ $thirdImage }}"
                        alt=""
                        class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                    <div class="relative pt-3 bg-white p-2">
                        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                            Inter-Sahara <br />Railways Construction
                        </h3>

                        <p class="mt-2">
                            <span class="sr-only">Railway Construction </span>


                            <span class="tracking-wider text-gray-900"> Railway Construction </span>
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block overflow-hidden group">
                    <img src="{{ $fourthImage }}"
                        alt=""
                        class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                    <div class="relative pt-3 bg-white p-2">
                        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                            Inter-Sahara <br />Railways Construction
                        </h3>

                        <p class="mt-2">
                            <span class="sr-only">Railway Construction </span>


                            <span class="tracking-wider text-gray-900"> Railway Construction </span>
                        </p>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>
