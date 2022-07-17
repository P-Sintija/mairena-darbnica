<template>
    <div class="relative">
        <div class="bg-dark-gray p-8 bg-cover bg-center h-[35rem]"
             v-bind:style="{ 'background-image': 'url(' + this.backgroundUrl + ')'}">
        </div>
        <a :href="this.href" class="absolute top-0 left-0 h-full w-full flex justify-center items-center
                    transition ease-in-out bg-dark-gray-low hover:bg-dark-gray-high duration-300">
            <h2 class="text-xl text-text-white">{{ this.label }}</h2>
        </a>
    </div>
</template>

<script>
export default {
    name: "CategoryCardVertical",
    props: {
        backgroundUrl: String,
        href: String,
        label: String,
    },
}
</script>

<style scoped>

</style>
