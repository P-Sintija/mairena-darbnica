<template>
    <div class="lg:w-1/2 md:w-1/2 w-full px-4 flex justify-center">
        <nav class="list-none">
            <ul class="flex flex-col gap-4">
                <li class="" v-for="item in this.menuItem" :key="item">
                    <a :href="item.url" class="text-lg hover:text-light-highlighted" :target="item.target">{{ item.label }}</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "FooterNavigation",
    props: {
        menuItem: Object,
    },
}
</script>

<style scoped>

</style>
