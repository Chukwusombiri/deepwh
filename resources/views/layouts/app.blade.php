<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Spline+Sans:wght@600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased relative inter-regular bg-white dark:bg-gray-900" x-data="{
    openModal: false,
    toggleModal() {
        this.openModal = !this.openModal;        
    }
}">
    <main class="">
        {{ $slot }}
    </main>
    <div style="display: none" x-show="openModal" class="fixed inset-0 z-30 bg-gray-900/20 backdrop-blur-sm">
        <div class="w-full h-full flex justify-center items-center px-8">
            <div class="bg-white dark:bg-gray-700 rounded-xl max-w-md" x-on:click.away="openModal=false">
                <div class="flex justify-end p-1">
                    <button x-on:click="openModal = false" type="button"
                        class="cursor-pointer rounded-full p-2 hover:bg-gray-300 dark:hover:bg-gray-900 outline-none focus:outline-none active:outline-none ring-0">
                        <svg class="w-5 h-5 dark:text-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                            <path d="M18 6l-12 12"></path>
                            <path d="M6 6l12 12"></path>
                          </svg>
                    </button>
                </div>
                <div class="px-6 pb-4 flex flex-col gap-2">
                    <h4 class="text-2xl inter-semibold flex flex-nowrap items-center text-heading dark:text-slate-300">
                        <span>Coming Soon!!</span>
                        <svg class="ml-3 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                            <path d="M15 8a5 5 0 0 1 0 8"></path>
                            <path d="M17.7 5a9 9 0 0 1 0 14"></path>
                            <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5"></path>
                          </svg>
                    </h4>
                    <p class="text-sm text-para-dark dark:text-para-light">
                        This feature is currently in beta as we fine-tune its performance. A stable version will be rolled out soon. Stay updated to be among the first to access the full release!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
