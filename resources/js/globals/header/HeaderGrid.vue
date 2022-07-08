<template>
    <!-- AlpineJS -->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.8.1/cdn.min.js" defer></script>-->

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

                <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option>Choose a color</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Yellow</option>
                        <option>Black</option>
                        <option>Orange</option>
                        <option>Purple</option>
                        <option>Gray</option>
                        <option>White</option>
                    </select>
                </div>

                <div>
                    <ul class="ml-4 xl:w-48 flex items-center justify-end">
                        <li class="ml-2 lg:ml-4 relative inline-block">
                            <a class="" href="">
                                <svg class="h-9 lg:h-10 p-2 text-gray-500 svg-inline--fa fa-user fa-w-14 fa-9x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
                            </a>
                        </li>
                        <li class="ml-2 lg:ml-4 relative inline-block">
                            <a class="" href="">
                                <div class="absolute -top-1 right-0 z-10 bg-red-400 text-xs font-bold px-1 py-0.5 rounded-sm">3</div>
                                <svg class="h-9 lg:h-10 p-2 text-gray-500 svg-inline--fa fa-heart fa-w-16 fa-9x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg>
                            </a>
                        </li>
                        <li class="ml-2 lg:ml-4 relative inline-block">
                            <a class="" href="">
                                <div class="absolute -top-1 right-0 z-10 bg-red-400 text-xs font-bold px-1 py-0.5 rounded-sm">12</div>
                                <svg class="h-9 lg:h-10 p-2 text-gray-500 svg-inline--fa fa-shopping-cart fa-w-18 fa-9x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="-my-2 md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false"><span class="sr-only">Open menu</span><svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
                </div>


            </nav>
        </div>

    </div>
<!--    <script>-->
<!--        const appData = () => {-->
<!--            return {-->
<!--                percent: 0,-->

<!--                appInit() {-->
<!--                    // source: https://codepen.io/A_kamel/pen/qBmmGKJ-->
<!--                    window.addEventListener('scroll', () => {-->
<!--                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop,-->
<!--                            height = document.documentElement.scrollHeight - document.documentElement.clientHeight;-->

<!--                        this.percent = Math.round((winScroll / height) * 100);-->
<!--                    });-->
<!--                },-->
<!--            };-->
<!--        };-->
<!--    </script>-->
</template>

<script>
export default {
    name: "HeaderGrid"
}
</script>

<style scoped>

</style>
