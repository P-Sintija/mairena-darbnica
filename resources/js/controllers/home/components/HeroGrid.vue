<template>
    <section class="relative">
        <div class="h-96 bg-cover bg-dark-gray lg:h-[600px] sm:h-[500px] h-[400px]"
             v-bind:style="{ 'background-image': 'url(' + this.heroImage + ')'}">
        </div>
        <div class="absolute top-0 left-0 h-full w-full bg-dark-gray-medium">
            <div class="container m-auto p-5 flex justify-center items-start flex-col w-full h-full">
                <h1 class="mt-24 text-3xl lg:text-5xl text-text-white">Comming Soon</h1>
                <p class="mt-6 text-base lg:text-lg text-text-white">You can subscribe to our newsletter, and let you
                    know when we
                    are back</p>
                <primary-link-button :href="'#'"
                                     :label="'Some tex here'"
                                     class="mt-8"
                ></primary-link-button>
            </div>
        </div>
    </section>
</template>

<script>
import PrimaryLinkButton from "../../../globals/buttons/primary/PrimaryLinkButton";

export default {
    name: "HeroGrid",
    components: {PrimaryLinkButton},
    props: ['heroImage'],
    data() {

    },
}
</script>

<style scoped>

</style>
