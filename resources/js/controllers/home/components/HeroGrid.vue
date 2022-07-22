<template>
    <div class="relative">
        <div class="h-96 bg-cover bg-dark-gray lg:h-[600px] sm:h-[500px] h-[400px]"
             v-bind:style="{ 'background-image': 'url(' + this.heroImage + ')'}">
        </div>
        <div class="absolute top-0 left-0 h-full w-full bg-dark-gray-medium">
            <div class="container m-auto p-5 flex justify-center items-start flex-col w-full h-full">
                <h1 class="mt-24 text-3xl lg:text-5xl text-text-white">{{ this.heroData.hero_title }}</h1>
                <p class="mt-6 text-base lg:text-lg text-text-white">{{ this.heroData.hero_text }}</p>
                <primary-link-button v-if="this.heroData.hero_redirect_url && this.heroData.hero_redirect_label"
                                     :href="this.heroData.hero_redirect_url"
                                     :label="this.heroData.hero_redirect_label"
                                     class="mt-8"
                ></primary-link-button>
            </div>
        </div>
    </div>
</template>

<script>
import PrimaryLinkButton from "../../../globals/buttons/primary/PrimaryLinkButton";

export default {
    name: "HeroGrid",
    components: {PrimaryLinkButton},
    props: ['heroImage', 'heroData'],
}
</script>

<style scoped>

</style>
