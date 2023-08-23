<x-front-layout>

    <section class="p-8">

        <div class="space-y-8">
            <div>

                <form x-data="{ formStep: 1 }" class="space-y-2">
                    <x-button x-cloak x-show="formStep > 1" @click="formStep -= 1" type="x-button" class="x-button">
                        Back
                    </x-button>

                    <div x-cloak x-show="formStep === 1">Step 1</div>
                    <div x-cloak x-show="formStep === 2">Step 2</div>
                    <div x-cloak x-show="formStep === 3">Step 3</div>
                    <div x-cloak x-show="formStep === 4">Final Step</div>

                    <x-button x-cloak x-show="formStep < 4" @click="formStep += 1" type="button" class="button">
                        Next Step
                    </x-button>

                    <x-button x-cloak x-show="formStep === 4" class="x-button" type="submit">
                        Submit
                    </x-button>
                </form>
            </div>


            <div>
                <div x-data="{ activeTab: 'details' }">
                    <ul class="flex flex-wrap gap-2">
                        <li>
                            <a @click.prevent="activeTab = 'details'"
                                :class="{ 'button-active': activeTab === 'details' }" href="#details" class="button">
                                Details
                            </a>
                        </li>

                        <li>
                            <a @click.prevent="activeTab = 'specs'" :class="{ 'button-active': activeTab === 'specs' }"
                                href="#specs" class="button">
                                Specs
                            </a>
                        </li>

                        <li>
                            <a @click.prevent="activeTab = 'reviews'"
                                :class="{ 'button-active': activeTab === 'reviews' }" href="#reviews" class="button">
                                Reviews
                            </a>
                        </li>
                    </ul>

                    <div class="content">
                        <div x-cloak x-show="activeTab === 'details'">Details</div>
                        <div x-cloak x-show="activeTab === 'specs'">Specs</div>
                        <div x-cloak x-show="activeTab === 'reviews'">Reviews</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="h-screen flex bg-gray-900 items-center justify-center">
            <div class="grid grid-cols-12 gap-2 gap-y-4 max-w-6xl">

              <!-- Video 1 -->
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                  <div class="relative">

                    <!-- Image Video -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/59/300/200" class="w-96 h-auto" />
                    </a>

                    <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                  </div>

                  <div class="flex flex-row mt-2 gap-2">

                    <!-- Profile Picture -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/1/40/40" class="rounded-full max-h-10 max-w-10" />
                    </a>

                    <!-- Description -->
                    <div clas="flex flex-col">
                      <a href="#">
                        <p class="text-gray-100 text-sm font-semibold">Learn CSS Box Model in 8 Minutes</p>
                      </a>
                      <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Web Dev Simplified </a>
                      <p class="text-gray-400 text-xs mt-1">241K views . 3 years ago</p>
                    </div>

                  </div>
                </card>
              </div>

              <!-- Video 2 -->
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                  <div class="relative">

                    <!-- Image Video -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/60/300/200" class="w-96 h-auto" />
                    </a>

                    <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                  </div>

                  <div class="flex flex-row mt-2 gap-2">

                    <!-- Profile Picture -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/4/40/40" class="rounded-full max-h-10 max-w-10" />
                    </a>

                    <!-- Description -->
                    <div clas="flex flex-col">
                      <a href="#">
                        <p class="text-gray-100 text-sm font-semibold">Learn CSS Box Model in 8 Minutes</p>
                      </a>
                      <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Web Dev Simplified </a>
                      <p class="text-gray-400 text-xs mt-1">241K views . 3 years ago</p>
                    </div>

                  </div>
                </card>
              </div>

              <!-- Video 3 -->
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                  <div class="relative">

                    <!-- Image Video -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/22/300/200" class="w-96 h-auto" />
                    </a>

                    <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                  </div>

                  <div class="flex flex-row mt-2 gap-2">

                    <!-- Profile Picture -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/88/40/40" class="rounded-full max-h-10 max-w-10" />
                    </a>

                    <!-- Description -->
                    <div clas="flex flex-col">
                      <a href="#">
                        <p class="text-gray-100 text-sm font-semibold">Learn CSS Box Model in 8 Minutes</p>
                      </a>
                      <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Web Dev Simplified </a>
                      <p class="text-gray-400 text-xs mt-1">241K views . 3 years ago</p>
                    </div>

                  </div>
                </card>
              </div>

              <!-- Video 4 -->
              <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                  <div class="relative">

                    <!-- Image Video -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/90/300/200" class="w-96 h-auto" />
                    </a>

                    <p class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">1:15</p>
                  </div>

                  <div class="flex flex-row mt-2 gap-2">

                    <!-- Profile Picture -->
                    <a href="#">
                      <img src="https://picsum.photos/seed/57/40/40" class="rounded-full max-h-10 max-w-10" />
                    </a>

                    <!-- Description -->
                    <div clas="flex flex-col">
                      <a href="#">
                        <p class="text-gray-100 text-sm font-semibold">Learn CSS Box Model in 8 Minutes</p>
                      </a>
                      <a class="text-gray-400 text-xs mt-2 hover:text-gray-100" href="#"> Web Dev Simplified </a>
                      <p class="text-gray-400 text-xs mt-1">241K views . 3 years ago</p>
                    </div>

                  </div>
                </card>
              </div>
            </div>
          </div>

    </section>


</x-front-layout>
