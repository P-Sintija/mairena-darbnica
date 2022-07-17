<template>
    <a :href="this.href" class="block font-medium text-gray-500 hover:underline">{{ this.label }}</a>
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
