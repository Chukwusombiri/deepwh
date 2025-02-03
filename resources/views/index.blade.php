<x-app-layout>
    <section class="bg-center bg-cover" style="background-image: url('/images/home-banner.webp')">
        <div class="min-h-screen bg-transparent dark:bg-slate-900/20 backdrop-blur-sm">
            <x-navigation />
            <div class="relative w-full max-w-6xl mx-auto h-screen flex flex-col justify-center items-center px-6 md:px-8">                
                <button type="button" x-on:click="toggleModal()"
                    class="text-para-light dark:text-blue-600 outline-none focus:outline-none active:outline-none text-sm hover:underline cursor-pointer">
                    🎉 {{ config('app.name') }}-R1 is now live and open source, rivaling OpenAI's Model o1. Available on
                    web, app, and API. Click for details.
                </button>
                <h1 class="text-6xl inter-bold text-center mt-12 mb-8 tracking-wide spline-sans text-blue-600">
                    deepwhales
                </h1>
                <p class="text-3xl text-center text-heading dark:text-slate-900 inter-bold mb-12">Into the unknown</p>
                <div class="w-full max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 justify-center gap-6">
                    <div x-on:click="toggleModal()"
                        class="cursor-pointer flex flex-col gap-2 bg-slate-50 dark:bg-gray-900 shadow shadow-gray-300 rounded-2xl p-6 focus:ring-2 focus:ring-heading-primary">
                        <h3 class="text-xl text-heading-primary inter-bold capitalize">Start now</h3>
                        <div class="space-y-0.5">
                            <p class="text-sm text-para-dark">Free access to {{ config('app.name') }}-V3</p>
                            <p class="text-sm text-para-dark">Experience the intelligent model.</p>
                        </div>
                    </div>
                    <div x-on:click="toggleModal()"
                        class="cursor-pointer flex flex-col gap-2 bg-slate-50 dark:bg-gray-900 shadow shadow-gray-300 rounded-2xl p-6 focus:ring-2 focus:ring-heading-primary">
                        <h3 class="text-xl text-heading-primary inter-bold capitalize">Get {{ config('app.name') }} App
                        </h3>
                        <div class="space-y-0.5">
                            <p class="text-sm text-para-dark">Chat on the go with {{ config('app.name') }}-V3</p>
                            <p class="text-sm text-para-dark">Your free all-in-one AI tool</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 py-20">
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
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-[20%] p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Architecture</span>
                                </td>
                                <td class="w-[15%] p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">MoE</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">MoE</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Dense</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Dense</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400"># Activated Params</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">37B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">21B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">72B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">405B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400"># Total Params</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">671B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">236B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">72B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">405B</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">-</span>
                                </td>
                            </tr>
                            {{-- new section --}}
                            <tr>
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">MMLU (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">88.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">80.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">85.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">88.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">88.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">87.2</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 text-center">
                                </td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">MMLU-Redux (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">89.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">80.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">85.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">86.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">88.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">88.0</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">MMLU-Pro (EM)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">75.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">66.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">71.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">73.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">78.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">2.6</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">DROP (3-shot F1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">91.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">87.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">76.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">88.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">88.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">83.7</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark">English</td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">IF-Eval (Prompt
                                        Strict)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">86.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">80.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">84.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">86.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">86.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">84.3</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">GPQA-Diamond
                                        (Pass@1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">59.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">41.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">49.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">51.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">65.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">49.9</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">SimpleQA (Correct)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">24.9</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">10.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">9.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">17.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">28.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">38.2</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">FRAMES (Acc.)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">73.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">65.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">69.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">70.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">72.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">80.5</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">LongBench v2 (Acc.)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">48.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">35.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">39.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">36.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">41.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">48.1</span>
                                </td>
                            </tr>
                            {{-- new section --}}
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">HumanEval-Mul
                                        (Pass@1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">82.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">77.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">77.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">77.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">81.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">80.5</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">LiveCodeBench
                                        (Pass@1-COT)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">40.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">29.2</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">31.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">28.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">36.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">33.4</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">LiveCodeBench
                                        (Pass@1)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">37.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">28.4</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">28.7</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">30.1</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">32.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">34.2</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark">Code</td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">Codeforces
                                        (Percentile)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm inter-semibold">51.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">35.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">24.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">25.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">20.3</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">23.6</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[10%] p-4 text-center text-sm inter-semibold text-para-dark"></td>
                                <td class="w-1/4 p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">SWE Verified
                                        (Resolved)</span>
                                </td>
                                <td class="p-4 text-center bg-blue-100">
                                    <span class="text-blue-700 text-sm">42.0</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">22.6</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">23.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">24.5</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400 inter-semibold">50.8</span>
                                </td>
                                <td class="p-4 text-center">
                                    <span class="text-para-dark text-sm dark:text-slate-400">38.8</span>
                                </td>
                            </tr>
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
                            {{-- new section --}}
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
                            {{-- new section --}}
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
    </section>
</x-app-layout>
