<template>
    <div class="lg:h-0 md:fixed md:top-[88px] md:left-0 md:right-0 md:z-10">

        <nav class="flex px-4 w-full justify-center bg-white">
            <ul class=" md:px-2 md:flex md:space-x-2">
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center text-text-gray-1 hover:text-dark-highlighted">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center text-text-gray-1 hover:text-dark-highlighted">
                        <span>Products</span>
                    </a>
                </li>
                <li class="relative parent">
                    <a href="#" class="flex justify-between md:inline-flex p-4 items-center text-text-gray-1 hover:text-dark-highlighted space-x-2">
                        <span>Service</span>
                        <svg style="fill: currentColor" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 pt-1" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
                    </a>
                    <ul class="child transition duration-300 md:absolute top-full right-0 md:w-48 bg-white md:shadow-lg md:rounded-b ">
                        <li>
                            <a href="#" class="flex px-4 py-3 text-text-gray-1 hover:text-dark-highlighted">
                                Web development
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 text-text-gray-1 hover:text-dark-highlighted">
                                Web Design
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex px-4 py-3 text-text-gray-1 hover:text-dark-highlighted">
                                Machine Learning
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex md:inline-flex p-4 items-center text-text-gray-1 hover:text-dark-highlighted">
                        <span>About us</span>
                    </a>
                </li>
            </ul>
            <div class="ml-auto md:hidden text-gray-500 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "CategoryMenu"
}
</script>

<style scoped>
@media only screen and (min-width: 768px){
    .parent:hover .child {
        opacity:1;
        height:auto;
        overflow:none;
        transform: translateY(0);
    }
    .child {
        opacity:0;
        height:0;
        overflow:hidden;
        transform: translateY(-10%);
    }
}
</style>
