<?php require 'partials/header.php' ?>

<div class="grid min-h-screen w-full lg:grid-cols-[280px_1fr]">
    <div class="hidden border-r bg-gray-100/40 lg:block dark:bg-gray-800/40">
        <div class="flex h-full max-h-screen flex-col gap-2">
            <div class="flex h-[60px] items-center border-b px-6">
                <a class="flex items-center gap-2 font-semibold" href="#" rel="ugc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                        <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                        <path d="M12 3v6"></path>
                    </svg>
                    <span class="">Acme Inc</span>
                </a>
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground ml-auto h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                    </svg>
                    <span class="sr-only">Toggle notifications</span>
                </button>
            </div>
            <div class="flex-1 overflow-auto py-2">
                <nav class="grid items-start px-4 text-sm font-medium">
                    <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-500 transition-all hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-50" href="#" rel="ugc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Home
                    </a>
                    <a class="flex items-center gap-3 rounded-lg bg-gray-100 px-3 py-2 text-gray-900  transition-all hover:text-gray-900 dark:bg-gray-800 dark:text-gray-50 dark:hover:text-gray-50" href="#" rel="ugc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <circle cx="8" cy="21" r="1"></circle>
                            <circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Orders
                        <div class="whitespace-nowrap border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80 ml-auto flex h-6 w-6 shrink-0 items-center justify-center rounded-full">
                            6
                        </div>
                    </a>
                    <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-500 transition-all hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-50" href="#" rel="ugc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <path d="m7.5 4.27 9 5.15"></path>
                            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
                            <path d="m3.3 7 8.7 5 8.7-5"></path>
                            <path d="M12 22V12"></path>
                        </svg>
                        Products
                    </a>
                    <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-500 transition-all hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-50" href="#" rel="ugc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        Customers
                    </a>
                    <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-500 transition-all hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-50" href="#" rel="ugc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                            <path d="M3 3v18h18"></path>
                            <path d="m19 9-5 5-4-4-3 3"></path>
                        </svg>
                        Analytics
                    </a>
                </nav>
            </div>
            <div class="mt-auto p-4">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6 pb-4">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Upgrade to Pro</h3>
                        <p class="text-sm text-muted-foreground">
                            Unlock all features and get unlimited access to our support team
                        </p>
                    </div>
                    <div class="p-6">
                        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 w-full">
                            Upgrade
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <header class="flex h-14 lg:h-[60px] items-center gap-4 border-b bg-gray-100/40 px-6 dark:bg-gray-800/40">
            <a class="lg:hidden" href="#" rel="ugc">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                    <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                    <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                    <path d="M12 3v6"></path>
                </svg>
                <span class="sr-only">Home</span>
            </a>
            <div class="w-full flex-1">
                <form>
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-500 dark:text-gray-400">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <input class="flex h-10 rounded-md border border-input px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full bg-white shadow-none appearance-none pl-8 md:w-2/3 lg:w-1/3 dark:bg-gray-950" placeholder="Search products..." type="search" />
                    </div>
                </form>
            </div>
            <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border border-gray-200 w-8 h-8 dark:border-gray-800" type="button" id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                <img src="/placeholder.svg" width="32" height="32" class="rounded-full" alt="Avatar" style="aspect-ratio: 32 / 32; object-fit: cover;" />
                <span class="sr-only">Toggle user menu</span>
            </button>
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
            <div class="flex items-center">
                <h1 class="font-semibold text-lg md:text-2xl">Dashboard</h1>
                <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-9 rounded-md px-3 ml-auto">
                    Add product
                </button>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">To</h3>
                        <p class="text-sm text-muted-foreground">$1</p>
                    </div>
                    <div class="p-6">
                        <div class="w-full aspect-[4/3]">
                            <div style="width: 100%; height: 100%;">
                                <div style="position: relative;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="195.1875" height="146.390625" role="application">
                                        <rect width="195.1875" height="146.390625" fill="transparent"></rect>
                                        <g transform="translate(40,10)">
                                            <g>
                                                <line opacity="1" x1="0" x2="0" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="29.0375" x2="29.0375" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="58.075" x2="58.075" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="87.11250000000001" x2="87.11250000000001" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="116.15" x2="116.15" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="145.1875" x2="145.1875" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g>
                                                <line opacity="1" x1="0" x2="145.1875" y1="96" y2="96" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="73" y2="73" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="49" y2="49" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="26" y2="26" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="2" y2="2" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g transform="translate(0,96.390625)">
                                                <g transform="translate(0,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jan
                                                    </text>
                                                </g>
                                                <g transform="translate(29.0375,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Feb
                                                    </text>
                                                </g>
                                                <g transform="translate(58.075,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Mar
                                                    </text>
                                                </g>
                                                <g transform="translate(87.11250000000001,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Apr
                                                    </text>
                                                </g>
                                                <g transform="translate(116.15,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        May
                                                    </text>
                                                </g>
                                                <g transform="translate(145.1875,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jun
                                                    </text>
                                                </g>
                                                <line x1="0" x2="145.1875" y1="0" y2="0" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(0,0)">
                                                <g transform="translate(0,96)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        0
                                                    </text>
                                                </g>
                                                <g transform="translate(0,73)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        50
                                                    </text>
                                                </g>
                                                <g transform="translate(0,49)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        100
                                                    </text>
                                                </g>
                                                <g transform="translate(0,26)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        150
                                                    </text>
                                                </g>
                                                <g transform="translate(0,2)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        200
                                                    </text>
                                                </g>
                                                <line x1="0" x2="0" y1="0" y2="96.390625" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <path d="M0,68L29.0375,74L58.075,13L87.11250000000001,60L116.15,51L145.1875,0" fill="none" stroke-width="2" stroke="#e11d48"></path>
                                            <path d="M0,76L29.0375,32L58.075,68L87.11250000000001,28L116.15,84L145.1875,24" fill="none" stroke-width="2" stroke="#2563eb"></path>
                                            <g>
                                                <g transform="translate(145.1875, 0)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(116.15, 51)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(87.11250000000001, 60)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(58.075, 13)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(29.0375, 74)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(0, 68)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(145.1875, 24)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(116.15, 84)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(87.11250000000001, 28)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(58.075, 68)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(29.0375, 32)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(0, 76)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                            </g>
                                            <g>
                                                <rect width="145.1875" height="96.390625" fill="red" opacity="0" style="cursor: auto;"></rect>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Revenue</h3>
                        <p class="text-sm text-muted-foreground">$80,000</p>
                    </div>
                    <div class="p-6">
                        <div class="w-full aspect-[4/3]">
                            <div style="width: 100%; height: 100%;">
                                <div style="position: relative;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="195.1875" height="146.390625" role="application" aria-label="A bar chart showing data" focusable="false">
                                        <rect width="195.1875" height="146.390625" fill="transparent"></rect>
                                        <g transform="translate(40,0)">
                                            <g>
                                                <line opacity="1" x1="0" x2="155.1875" y1="106" y2="106" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="73" y2="73" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="39" y2="39" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="5" y2="5" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g transform="translate(0,106.390625)">
                                                <g transform="translate(18,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jan
                                                    </text>
                                                </g>
                                                <g transform="translate(42,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Feb
                                                    </text>
                                                </g>
                                                <g transform="translate(66,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Mar
                                                    </text>
                                                </g>
                                                <g transform="translate(90,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Apr
                                                    </text>
                                                </g>
                                                <g transform="translate(114,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        May
                                                    </text>
                                                </g>
                                                <g transform="translate(138,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jun
                                                    </text>
                                                </g>
                                                <line x1="0" x2="155.1875" y1="0" y2="0" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(0,0)">
                                                <g transform="translate(0,106)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        0
                                                    </text>
                                                </g>
                                                <g transform="translate(0,73)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        50
                                                    </text>
                                                </g>
                                                <g transform="translate(0,39)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        100
                                                    </text>
                                                </g>
                                                <g transform="translate(0,5)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        150
                                                    </text>
                                                </g>
                                                <line x1="0" x2="0" y1="0" y2="106.390625" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(9, 31)">
                                                <rect width="4.918533640162239" height="75" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(33, 0)">
                                                <rect width="4.918533640162239" height="106" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(57, 19)">
                                                <rect width="4.918533640162239" height="87" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(81, 5)">
                                                <rect width="4.918533640162239" height="101" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(105, 26)">
                                                <rect width="4.918533640162239" height="80" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(129, 58)">
                                                <rect width="4.918533640162239" height="48" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">New Customers</h3>
                        <p class="text-sm text-muted-foreground">500</p>
                    </div>
                    <div class="p-6">
                        <div class="w-full aspect-[4/3]">
                            <div style="width: 100%; height: 100%;">
                                <div style="position: relative;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="195.1875" height="146.390625" role="application">
                                        <rect width="195.1875" height="146.390625" fill="transparent"></rect>
                                        <g transform="translate(40,10)">
                                            <g>
                                                <line opacity="1" x1="0" x2="0" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="29.0375" x2="29.0375" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="58.075" x2="58.075" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="87.11250000000001" x2="87.11250000000001" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="116.15" x2="116.15" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="145.1875" x2="145.1875" y1="0" y2="96.390625" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g>
                                                <line opacity="1" x1="0" x2="145.1875" y1="96" y2="96" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="73" y2="73" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="49" y2="49" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="26" y2="26" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="145.1875" y1="2" y2="2" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g transform="translate(0,96.390625)">
                                                <g transform="translate(0,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jan
                                                    </text>
                                                </g>
                                                <g transform="translate(29.0375,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Feb
                                                    </text>
                                                </g>
                                                <g transform="translate(58.075,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Mar
                                                    </text>
                                                </g>
                                                <g transform="translate(87.11250000000001,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Apr
                                                    </text>
                                                </g>
                                                <g transform="translate(116.15,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        May
                                                    </text>
                                                </g>
                                                <g transform="translate(145.1875,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jun
                                                    </text>
                                                </g>
                                                <line x1="0" x2="145.1875" y1="0" y2="0" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(0,0)">
                                                <g transform="translate(0,96)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        0
                                                    </text>
                                                </g>
                                                <g transform="translate(0,73)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        50
                                                    </text>
                                                </g>
                                                <g transform="translate(0,49)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        100
                                                    </text>
                                                </g>
                                                <g transform="translate(0,26)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        150
                                                    </text>
                                                </g>
                                                <g transform="translate(0,2)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        200
                                                    </text>
                                                </g>
                                                <line x1="0" x2="0" y1="0" y2="96.390625" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <path d="M0,68L29.0375,74L58.075,13L87.11250000000001,60L116.15,51L145.1875,0" fill="none" stroke-width="2" stroke="#e11d48"></path>
                                            <path d="M0,76L29.0375,32L58.075,68L87.11250000000001,28L116.15,84L145.1875,24" fill="none" stroke-width="2" stroke="#2563eb"></path>
                                            <g>
                                                <g transform="translate(145.1875, 0)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(116.15, 51)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(87.11250000000001, 60)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(58.075, 13)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(29.0375, 74)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(0, 68)" style="pointer-events: none;">
                                                    <circle r="3" fill="#e11d48" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(145.1875, 24)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(116.15, 84)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(87.11250000000001, 28)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(58.075, 68)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(29.0375, 32)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                                <g transform="translate(0, 76)" style="pointer-events: none;">
                                                    <circle r="3" fill="#2563eb" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle>
                                                </g>
                                            </g>
                                            <g>
                                                <rect width="145.1875" height="96.390625" fill="red" opacity="0" style="cursor: auto;"></rect>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">
                            Average Order Value
                        </h3>
                        <p class="text-sm text-muted-foreground">$50</p>
                    </div>
                    <div class="p-6">
                        <div class="w-full aspect-[4/3]">
                            <div style="width: 100%; height: 100%;">
                                <div style="position: relative;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="195.1875" height="146.390625" role="application" aria-label="A bar chart showing data" focusable="false">
                                        <rect width="195.1875" height="146.390625" fill="transparent"></rect>
                                        <g transform="translate(40,0)">
                                            <g>
                                                <line opacity="1" x1="0" x2="155.1875" y1="106" y2="106" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="73" y2="73" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="39" y2="39" stroke="#f3f4f6" stroke-width="1"></line>
                                                <line opacity="1" x1="0" x2="155.1875" y1="5" y2="5" stroke="#f3f4f6" stroke-width="1"></line>
                                            </g>
                                            <g transform="translate(0,106.390625)">
                                                <g transform="translate(18,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jan
                                                    </text>
                                                </g>
                                                <g transform="translate(42,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Feb
                                                    </text>
                                                </g>
                                                <g transform="translate(66,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Mar
                                                    </text>
                                                </g>
                                                <g transform="translate(90,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Apr
                                                    </text>
                                                </g>
                                                <g transform="translate(114,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        May
                                                    </text>
                                                </g>
                                                <g transform="translate(138,0)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="text-before-edge" text-anchor="middle" transform="translate(0,16) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        Jun
                                                    </text>
                                                </g>
                                                <line x1="0" x2="155.1875" y1="0" y2="0" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(0,0)">
                                                <g transform="translate(0,106)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        0
                                                    </text>
                                                </g>
                                                <g transform="translate(0,73)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        50
                                                    </text>
                                                </g>
                                                <g transform="translate(0,39)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        100
                                                    </text>
                                                </g>
                                                <g transform="translate(0,5)" style="opacity: 1;">
                                                    <line x1="0" x2="0" y1="0" y2="0" style="stroke: rgb(119, 119, 119); stroke-width: 1;"></line>
                                                    <text dominant-baseline="central" text-anchor="end" transform="translate(-16,0) rotate(0)" style="font-family: sans-serif; font-size: 11px; fill: rgb(51, 51, 51); outline-width: 0px; outline-color: transparent;">
                                                        150
                                                    </text>
                                                </g>
                                                <line x1="0" x2="0" y1="0" y2="106.390625" style="stroke: transparent; stroke-width: 1;"></line>
                                            </g>
                                            <g transform="translate(9, 31)">
                                                <rect width="4.918533640162239" height="75" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(33, 0)">
                                                <rect width="4.918533640162239" height="106" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(57, 19)">
                                                <rect width="4.918533640162239" height="87" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(81, 5)">
                                                <rect width="4.918533640162239" height="101" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(105, 26)">
                                                <rect width="4.918533640162239" height="80" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                            <g transform="translate(129, 58)">
                                                <rect width="4.918533640162239" height="48" rx="0" ry="0" fill="#2563eb" stroke-width="0" stroke="#2563eb" focusable="false"></rect>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</main>
</body>

</html>