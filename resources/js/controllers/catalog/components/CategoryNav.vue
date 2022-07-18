<template>
    <a :href="this.href"
       class="block text-text-gray-1 hover:text-dark-highlighted"
    >{{ this.label }}</a>
</template>

<script>
export default {
    name: "CategoryNav",
    props: {
        href: String,
        label: String,
    },
}
</script>

<style scoped>

</style>
