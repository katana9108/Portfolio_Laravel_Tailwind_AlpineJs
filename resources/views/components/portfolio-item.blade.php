<div class="w-full md:w-1/2 xl:w-1/3 px-4" x-data="{categories: {{json_encode($categories)}}}"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'">
    <div class="relative mb-12">
        <a href="{{$github}}" target="_blank">
            <div class="rounded-lg overflow-hidden ease-in duration-300 hover:scale-105">
                <img src="{{$image}}" alt="portfolio" class="w-full h-[260px] object-cover">
            </div>
        </a>
        <div class="text-center bg-white dark:bg-slate-800
    relative z-10 py-9 rounded-lg shadow-lg
    mx-7 mt-4 h-[26Opx]">
            <span class="text-center text-primary font-semi-bold block mb-2">
                {{implode(", ", $categories)}}
            </span>
            <h3 class="font-bold text-lg text-dark dark:text-white mb-400 ">
                {{$title}}
            </h3>
            <x-button-link :href="$github" variant="outline-primary">View details</x-button-link>
        </div>
    </div>
</div>
