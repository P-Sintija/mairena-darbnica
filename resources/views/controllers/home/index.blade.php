@extends('layouts.main', [
    //'stylesheet' => mix('css/language.css', 'front')
])

@section('content')
    <!-- AlpineJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.8.1/cdn.min.js" defer></script>

    <!-- Slider Component Container -->
    <div class="flex flex-col items-center justify-center" x-cloak x-data="appData()" x-init="appInit()">
        <div class="flex flex-col">
            <!-- Page Scroll Progress -->
            <div class="fixed inset-x-0 top-0 z-50 h-0.5 mt-0.5" :style="`width: ${percent}%`"></div>

            <!-- Navbar -->
            <nav class="flex justify-around py-4 w-full
            fixed top-0 left-0 right-0 z-10">

                <!-- Logo Container -->
                <div class="flex items-center">
                    <!-- Logo -->
                    <a class="cursor-pointer">
                        <h3 class="text-2xl font-medium text-blue-500">
                            <img class="h-10 object-cover"
                                 src="https://stackoverflow.design/assets/img/logos/so/logo-stackoverflow.svg" alt="Store Logo">
                        </h3>
                    </a>
                </div>

                <!-- Links Section -->
                <div class="items-center hidden space-x-8 lg:flex">
                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                        Home
                    </a>

                    <a class="flex text-gray-600
                    cursor-pointer transition-colors duration-300
                    font-semibold text-blue-600">
                        Themes
                    </a>

                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                        Developers
                    </a>

                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                        Pricing
                    </a>

                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                        Blog
                    </a>

                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                        About Us
                    </a>
                </div>

                <!-- Icon Menu Section -->
                <div class="flex items-center space-x-5">
                    <!-- Register -->
                    <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                        </svg>

                        Register
                    </a>

                    <!-- Login -->
                    <a class="flex text-gray-600
                    cursor-pointer transition-colors duration-300
                    font-semibold text-blue-600">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                        </svg>

                        Login
                    </a>
                </div>
            </nav>
        </div>

    </div>
{{--    <script>--}}
{{--        const appData = () => {--}}
{{--            return {--}}
{{--                percent: 0,--}}

{{--                appInit() {--}}
{{--                    // source: https://codepen.io/A_kamel/pen/qBmmGKJ--}}
{{--                    window.addEventListener('scroll', () => {--}}
{{--                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop,--}}
{{--                            height = document.documentElement.scrollHeight - document.documentElement.clientHeight;--}}

{{--                        this.percent = Math.round((winScroll / height) * 100);--}}
{{--                    });--}}
{{--                },--}}
{{--            };--}}
{{--        };--}}
{{--    </script>--}}


    <section class="h-96 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1619364726002-dfd4fdaee5f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
        <div class="flex h-full w-full items-center justify-center container mx-auto px-8">
            <div class="max-w-2xl text-center">
                <h1 class="text-3xl sm:text-5xl capitalize tracking-widest text-white lg:text-7xl">Comming Soon</h1>

                <p class="mt-6 lg:text-lg text-white">You can subscribe to our newsletter, and let you know when we are back</p>

                <div class="mt-8 flex flex-col space-y-3 sm:-mx-2 sm:flex-row sm:justify-center sm:space-y-0">
                    <input id="email" type="text" class="rounded-md border border-transparent bg-white/20 px-4 py-2 text-white placeholder-white backdrop-blur-sm focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 sm:mx-2" placeholder="Email Address" />

                    <button class="transform rounded-md bg-blue-700 px-8 py-2 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-200 hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2">Notify Me</button>
                </div>
            </div>
        </div>
    </section>



@endsection

