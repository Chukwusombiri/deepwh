<x-app-layout>
    <section class="bg-center bg-cover mb-10" style="background-image: url('/images/home-banner.webp')">
        <div class="h-screen md:min-h-screen bg-transparent dark:bg-gray-900 backdrop-blur-sm">
            <x-navigation />
            <div class="relative w-full max-w-6xl mx-auto pt-16 md:pt-0 md:h-screen flex flex-col justify-center items-center px-6 md:px-8">                
                <button type="button" x-on:click="toggleModal()"
                    class="max-w-3xl text-para-light dark:text-slate-400 outline-none focus:outline-none active:outline-none text-sm hover:underline cursor-pointer">
                    {{ config('app.name') }} will be live post launch and open source, on-chain research intelligent agent trained with reinforcement learning. click for docs…
                </button>
                <h1 class="sora-extrabold text-5xl md:text-6xl inter-bold text-center mt-12 mb-8 text-blue-600 dark:text-blue-500">
                    deepwhales
                </h1>
                <p class="text-3xl text-center text-heading dark:text-slate-100 inter-bold mb-12">Into the ocean</p>
                <div class="w-full max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 justify-center gap-6">
                    <div x-on:click="toggleModal()"
                        class="cursor-pointer flex flex-col gap-2 bg-slate-50 dark:bg-gray-900 shadow shadow-gray-300 rounded-2xl p-6 focus:ring-2 focus:ring-heading-primary">
                        <h3 class="text-xl text-heading-primary dark:text-blue-500 inter-bold capitalize">Start now</h3>
                        <div class="space-y-0.5">
                            <p class="text-sm text-para-dark">Free access to {{ config('app.name') }}-V1</p>
                            <p class="text-sm text-para-dark">Experience the intelligent on-chain agent</p>
                        </div>
                    </div>
                    <div x-on:click="toggleModal()"
                        class="cursor-pointer flex flex-col gap-2 bg-slate-50 dark:bg-gray-900 shadow shadow-gray-300 rounded-2xl p-6 focus:ring-2 focus:ring-heading-primary">
                        <h3 class="text-xl text-heading-primary dark:text-blue-500 inter-bold capitalize">Get into {{ config('app.name') }} App
                        </h3>
                        <div class="space-y-0.5">
                            <p class="text-sm text-para-dark">Search and chat with {{ config('app.name') }} agent</p>
                            <p class="text-sm text-para-dark">Your all in one on-chain agent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="bg-white dark:bg-gray-900 py-20">
        <div class="w-full max-w-6xl mx-auto px-6 md:px-8">
            <h2 class="text-4xl text-heading inter-bold text-center mb-4 dark:text-slate-300">
                {{ config('app.name') }}-v3 Capabilities
            </h2>
            <p class="text-para-dark text-center">{{ config('app.name') }}-V3 achieves a significant breakthrough in
                inference speed over previous models.</p>
            <p class="text-para-dark text-center">It tops the leaderboard among open-source models and rivals the most
                advanced closed-source models globally.</p>
            <div class="overflow-hidden mt-10 pt-10 border-t border-gray-300">
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full table-fixed border-collapse">
                        <thead>
                            <tr>
                                <th class="w-[10%] p-4 text-center">

                                </th>
                                <th class="w-[20%] p-4 text-center">
                                    <span class="inter-bold text-heading text-sm dark:text-slate-300">Benchmark
                                        (Metric)</span>
                                </th>
                                <th class="w-[15%] p-4 bg-blue-100 rounded-t-2xl whitespace-nowrap text-center">
                                    <span class="inter-bold text-blue-700 text-sm">{{ config('app.name') }}-V3</span>
                                </th>
                                <th class="p-4 text-center whitespace-nowrap">
                                    <p class="inter-bold text-heading text-sm dark:text-slate-300">
                                        {{ config('app.name') }}-V3</p>
                                    <p class="text-para-light text-sm inter-regular mt-4 dark:text-gray-300">0905</p>
                                </th>
                                <th class="p-4 text-center whitespace-nowrap">
                                    <p class="inter-bold text-heading text-sm dark:text-slate-300">Owen-2.5</p>
                                    <p class="text-para-light text-sm inter-regular mt-4 dark:text-gray-300">72B-Inst
                                    </p>
                                </th>
                                <th class="p-4 text-center whitespace-nowrap">
                                    <p class="inter-bold text-heading text-sm dark:text-slate-300">Llama-3.1</p>
                                    <p class="text-para-light text-sm inter-regular mt-4 dark:text-gray-300">405B-Inst
                                    </p>
                                </th>
                                <th class="p-4 text-center whitespace-nowrap">
                                    <p class="inter-bold text-heading text-sm dark:text-slate-300">Claude-3.5</p>
                                    <p class="text-para-light text-sm inter-regular mt-4 dark:text-gray-300">Sonnet-1022
                                    </p>
                                </th>
                                <th class="p-4 text-center whitespace-nowrap">
                                    <p class="inter-bold text-heading text-sm dark:text-slate-300">GPT-Vo</p>
                                    <p class="text-para-light text-sm inter-regular mt-4 dark:text-gray-300">0513</p>
                                </th>
                            </tr>
                        </thead>

                        <tbody>                            
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Aider-Edit (Acc.)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">79.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">71.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">65.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">63.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">84.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">72.9</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Aider-Polyglot
                                        (Acc.)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">49.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">18.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">7.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">5.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">45.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">16.0</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">AIME 2024 (Pass@1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">39.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">16.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">23.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">23.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">16.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">9.3</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark">Math</td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">MATH-500 (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">90.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">74.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">80.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">73.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">78.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">74.6</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">CNMO 2024 (Pass@1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">43.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">10.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">15.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">6.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">13.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">10.8</span>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">CLUEWSC (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">90.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">90.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">91.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">84.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">85.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">87.9</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark">Chinese</td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">C-Eval (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">86.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">79.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">86.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">61.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">76.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">76.0</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">C-SimpleQA
                                        (Correct)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100 rounded-b-xl">
                                    <span class="text-blue-700 text-sm inter-semibold">64.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">54.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">48.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">50.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">51.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">59.3</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> --}}
</x-app-layout>
