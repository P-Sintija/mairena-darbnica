<template>

    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Country or region</label>
    <div class="mt-2 flex-col">
        <div class="relative">
            <button id="changetext" @click="showMenu(true)"
                    class="text-left border rounded-lg border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600 bg-white"
                    type="email" name="">United States
            </button>
            <svg id="closeIcon" class="cursor-pointer absolute top-4 right-4" width="16" height="16"
                 viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5 5.75L8 10.25L12.5 5.75" stroke="#27272A" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <svg id="openIcon" class="cursor-pointer hidden transform rotate-180 absolute top-4 right-4"
                 width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5 5.75L8 10.25L12.5 5.75" stroke="#27272A" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <div id="dropdown"
                 class="mt-1 hidden absolute z-10 w-full flex bg-gray-50 justify-start flex-col text-gray-600">
                <div @click="changeText('China')"
                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">China
                </div>
                <div @click="changeText('Russia')"
                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">Russia
                </div>
                <div @click="changeText('UK')"
                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">UK
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "SelectField",
    methods: {
        showMenu(flag) {
            let closeIcon = document.getElementById("closeIcon");
            let openIcon = document.getElementById("openIcon");
            let dropdown = document.getElementById("dropdown");
            let text = document.getElementById("changetext");

            // if (flag) {
            //     closeIcon.classList.toggle("hidden");
            //     openIcon.classList.toggle("hidden");
            //     dropdown.classList.toggle("hidden");
            // } else {
            closeIcon.classList.toggle("hidden");
            openIcon.classList.toggle("hidden");
            dropdown.classList.toggle("hidden");
            // }

        },
        changeText(country) {

            let closeIcon = document.getElementById("closeIcon");
            let openIcon = document.getElementById("openIcon");
            let dropdown = document.getElementById("dropdown");
            let text = document.getElementById("changetext");

            text.innerHTML = country;
            closeIcon.classList.toggle("hidden");
            openIcon.classList.toggle("hidden");
            dropdown.classList.toggle("hidden");
        },

    }
}
</script>

<style scoped>

</style>
