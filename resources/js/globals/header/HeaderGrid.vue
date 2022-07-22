<template>
    <div class="container m-auto w-full flex flex-col px-5">

        <nav id="menu-nav" class="w-full py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a class="cursor-pointer" href="/">
                    <img class="h-14 object-cover" src="/images/mairens_round.png" alt="Logo">
                </a>
            </div>

            <ul class="hidden lg:flex items-center justify-center space-x-8">
                <li v-for="item in this.menu" :key="item">
                    <a :href="item.url" class="text-xl text-text-white hover:text-light-highlighted"
                       :target="item.target">{{
                            item.label
                        }}</a>
                </li>
            </ul>

            <div class="relative hidden lg:inline-flex items-center justify-center">
                <svg class="w-2.5 h-2.5 absolute right-0 m-4 pointer-events-none text-text-white"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                    <path
                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                        fill="currentColor" fill-rule="nonzero"/>
                </svg>
                <select onchange="location = this.value;"
                        class="text-text-white h-10 pl-5 pr-10 bg-transparent focus:outline-none appearance-none
                            rounded-full ring-2 hover:ring ring-ring-border-light ring-opacity-30">
                    <option v-for="item in this.activeLanguages" :key="item" :value="item.url">
                        {{ item.label }}
                    </option>
                </select>
            </div>

            <div class="flex items-center">
                <ul class="hidden ml-4 sm:flex items-center justify-end">
                    <li class="ml-4 relative inline-block">
                        <a class="" href="#">
                            <svg class="h-10 p-2 text-text-white hover:text-light-highlighted"
                                 aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor"
                                      d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-4 relative inline-block">
                        <a class="" href="#">
                            <div
                                class="absolute -top-1 right-0 z-10 bg-notify text-text-gray-1 text-xs font-bold px-1 py-0.5 rounded-sm">
                                3
                            </div>
                            <svg class="h-10 p-2 text-text-white hover:text-light-highlighted"
                                 aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                      d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="ml-4 relative inline-block">
                        <a class="" href="">
                            <div
                                class="absolute -top-1 right-0 z-10 bg-notify text-text-gray-1 text-xs font-bold px-1 py-0.5 rounded-sm">
                                12
                            </div>
                            <svg class="h-10 p-2 text-text-white hover:text-light-highlighted"
                                 aria-hidden="true" focusable="false" data-prefix="far" data-icon="shopping-cart"
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                      d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex justify-center items-center lg:hidden">
                <button id="open-mob-menu-toggle" @click="this.toggleMenu()"
                        class="text-text-white focus:outline-none focus:ring-2">
                    <svg class="" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M4 12H20" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M4 18H20" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
                <button id="close-mob-menu-toggle" @click="this.toggleMenu()"
                        class="hidden text-text-white focus:outline-none focus:ring-2">
                    <svg class="" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M6 6L18 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <mobile-menu :language-menu="this.languageMenu"
                         :menu="this.menu"
            ></mobile-menu>

        </nav>
    </div>
</template>

<script>
import MobileMenu from "./components/MobileMenu";

export default {
    name: "HeaderGrid",
    components: {MobileMenu},
    props: {
        menu: Object,
        languageMenu: Object,
        isHomePage: Boolean,
    },
    data() {
        return {
            activeLanguages: [{
                'label': String,
                'url': String,
                'active': Boolean,
            }],
        }
    },
    created() {
        window.addEventListener('scroll', this.handleStickyHeader);
        window.addEventListener('resize', this.handleMobMenu);
        this.setTransparentBackground();
        this.setActiveLanguage();
    },
    destroyed() {
        window.removeEventListener('scroll', this.handleStickyHeader);
        window.addEventListener('resize', this.handleMobMenu);
    },
    methods: {
        setActiveLanguage() {
            const languages = [...this.languageMenu];
            const activeLanguageIndex = this.languageMenu.findIndex(item => item.active === true);
            const activeLanguage = languages.splice(activeLanguageIndex, 1);
            this.activeLanguages = activeLanguage.concat(languages);
        },
        handleStickyHeader() {
            if (document.body.classList.contains("overflow-hidden") && document.getElementById("open-mob-menu-toggle").classList.contains("hidden")) {
                this.setFilledBackground();
            } else if (window.scrollY > 0 && !document.body.classList.contains("overflow-hidden")) {
                this.setFilledBackground();
            } else {
                this.setTransparentBackground();
            }
        },
        toggleMenu() {
            document.getElementById("open-mob-menu-toggle").classList.toggle("hidden");
            document.getElementById("close-mob-menu-toggle").classList.toggle("hidden");
            document.getElementById("mobile-menu").classList.toggle("hidden");
            document.getElementById("header-grid").classList.toggle("h-screen");
            document.body.classList.toggle("overflow-hidden");
            window.scrollTo(0, 0);

            if (document.body.classList.contains("overflow-hidden")) {
                this.setFilledBackground();
            } else {
                this.setTransparentBackground();
            }
        },
        handleMobMenu() {
            if (document.body.classList.contains("overflow-hidden")) {
                this.toggleMenu();
            }
        },
        setTransparentBackground() {
            if (this.isHomePage) {
                document.getElementById("header-grid").classList.remove("bg-dark-gray");
                document.getElementById("header-grid").classList.add("bg-transparent");
            } else {
                document.getElementById("header-grid").classList.remove("bg-transparent");
                document.getElementById("header-grid").classList.add("bg-dark-gray");
            }
        },
        setFilledBackground() {
            document.getElementById("header-grid").classList.remove("bg-transparent");
            document.getElementById("header-grid").classList.add("bg-dark-gray");
        }
    }
}
</script>

<style scoped>

</style>
