<footer class="border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 pt-10 pb-4 px-6 md:px-10">    
    <div class="w-full max-w-6xl mx-auto">
        <div class="w-full flex md:justify-center">
            <x-app-logo />
        </div>
        <div class="flex md:justify-center items-center flex-nowrap gap-2">            
            <a href="https://x.com/deepwhales_ai?s=21&t=R1MFhxlz58DyroOcNDKZ8A">
                <svg class="w-7 h-7 text-heading dark:text-slate-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                height="24" stroke-width="2">
                <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
            </svg>
            </a>            
        </div>
        <div class="mt-4 flex md:justify-center items-center flex-wrap gap-2">
            <span class="text-para-dark inter-semibold text-sm tracking-wide dark:text-slate-400">&copy; {{ now()->format('Y') }} {{config('app.name')}}.</span>        
            <span class="text-para-dark inter-semibold text-sm tracking-wide dark:text-slate-400">All rights reserved.</span>
        </div>
    </div>    
</footer>
