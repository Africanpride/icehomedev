@props([
    'action',
    'actionLink' => "#",
    'primaryColor',
    'secondaryColor',
    'backgroundImage' => 'images/services/service012.jpg',
    'secondImage' => 'images/services/service039.jpg'
    ])


<div style="background-image: url('{{ $backgroundImage ?? "https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" }}') ;"
class="relative bg-cover bg-center bg-no-repeat">
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
            <a href="#"
                class="block w-full rounded bg-yellow-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-yellow-700 focus:outline-none focus:ring active:bg-yellow-500 sm:w-auto">
                Get Started
            </a>

            <a href="#"
                class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-yellow-600 shadow hover:text-yellow-700 focus:outline-none focus:ring active:text-yellow-500 sm:w-auto">
                Learn More
            </a>
        </div>
    </div>
</div>
</div>
