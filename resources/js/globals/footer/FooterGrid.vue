<template>
    <div class="bg-light-gray-1 text-text-gray-1">
        <div class="container mx-auto px-5">
            <div class="py-16 md:py-20 flex flex-col justify-center items-center md:items-start md:flex-row">
                <div class="w-1/3 flex justify-center">
                    <a>
                        <img class="h-32 object-cover" src="/images/mairens_round.png" alt="Logo">
                    </a>
                </div>
                <div class="w-2/3 flex justify-center md:mt-0 mt-6">
                    <footer-navigation :menu-item="this.menuLeft"></footer-navigation>
                    <footer-navigation :menu-item="this.menuRight"></footer-navigation>
                </div>
            </div>
            <div>
                <div class="mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Mairens</p>
                    <social-navigation :social-media="this.socialMedia"></social-navigation>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FooterNavigation from "./components/FooterNavigation";
import SocialNavigation from "./components/SocialNavigation";

export default {
    name: "FooterGrid",
    components: {SocialNavigation, FooterNavigation},
    props: {
        menuLeft: Object,
        menuRight: Object,
        socialMedia: Object,
    },
}
</script>

<style scoped>

</style>
