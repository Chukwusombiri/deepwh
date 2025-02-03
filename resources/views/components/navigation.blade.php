<nav x-data="{
    isDark: localStorage.getItem('theme') ?
        localStorage.getItem('theme') === 'dark' :
        true,

    toggleDark() {
        this.isDark = !this.isDark;
        localStorage.setItem('theme', this.isDark ? 'dark' : 'light');
        document.documentElement.classList.toggle('dark', this.isDark);
    },

    init() {
        document.documentElement.classList.toggle('dark', this.isDark);
    }
}" x-init="init()" class="bg-transparent">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center">
                <x-app-logo />
            </div>
            <div class="flex items-center gap-1.5 md:gap-4">
                <button type="button" x-on:click="toggleModal()" class="cursor-pointer inter-semibold outline-none active:outline-none focus:outline-none text-heading text-sm dark:text-slate-300 inline-flex md:gap-0.5 pb-1 border-b border-heading dark:border-slate-300">
                    <span>API Platform</span>
                    <svg class="w-4 h-4 md:w-5 md:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M17 7l-10 10"></path>
                        <path d="M8 7l9 0l0 9"></path>
                      </svg>
                </button>
                <button type="button" x-on:click="toggleModal()" class="cursor-pointer outline-none active:outline-none focus:outline-none  text-sm md:text-base text-para-light dark:text-slate-400">
                    中文
                </button>
                <button x-on:click="toggleDark" x-bind:class="isDark ? 'justify-end' : 'justify-start'"
                    class="flex w-12 rounded-full border border-gray-500 dark:border-gray-400 p-1 bg-gray-200 dark:bg-gray-600">
                    <svg :class="isDark ? 'block' : 'hidden'" class="w-5 h-5 bg-gray-400 text-gray-800 rounded-full"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M12 5l0 .01"></path>
                        <path d="M17 7l0 .01"></path>
                        <path d="M19 12l0 .01"></path>
                        <path d="M17 17l0 .01"></path>
                        <path d="M12 19l0 .01"></path>
                        <path d="M7 17l0 .01"></path>
                        <path d="M5 12l0 .01"></path>
                        <path d="M7 7l0 .01"></path>
                    </svg>
                    <svg :class="isDark ? 'hidden' : 'block'" class="w-5 h-5 bg-white text-gray-800 rounded-full"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
