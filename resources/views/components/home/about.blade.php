<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] lg:pb-[90px] overflow-hidden">
    <div class="container text-white">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full px-4 lg:w-6/12">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full px-3 xl:w-1/2 sm:px-4">

                        <div class="py-3 sm:py-4">
                            <img src="{{('images/keep.jpg')}}" alt="" class="rounded-2xl w-full" />
                        </div>

                        <div class="py-3 sm:py-4">
                            <img src="{{('images/jejey.jpg')}}" alt="" class="rounded-2xl w-full" />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 sm:px-4 px-3">
                        <div class="relative my-4 z-10">
                            <img src="{{ asset('images/keep.jpg')}}" alt="JeyCodeur-picture" class="rounded-2xl w-full" />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                            "Work smart, No hard."
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-white text-dark mb-8">
                        About Me.
                    </h2>
                    <p class=" mb-8 dark:text-white text-dark">
                        I am working as un developper for 3+ years.<br/>
                        During my career , i have worked on various tyoes of projects with various technologies,
                        but very often i feel that i am a junior developper who just started coding.<br/>
                    </p>
                    <p class=" mb-8 dark:text-white text-dark">
                       In 2019 i created my GitHub compte and share my little project on
                       <span class="text-amber-500 font-bold">PHP/LARAVEL</span>, <span class="text-amber-500 font-bold">JAVASCRIPT/REACT</span> and
                       <span class="text-amber-500 font-bold">Create API with Laravel</span>
                    </p>
                    <div class="ml-3 pb-4">
                        <x-button-link href="https://github.com/katana9108" variant="red" target="_blank">
                            My GitHub
                        </x-button-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
