<template>
    <a :href="this.href"
       class="px-8 py-2 text-base font-semibold tracking-wider text-text-white cursor-pointer
                    bg-light-highlighted focus:bg-dark-highlighted
                    transition-all ease-in-out duration-150 rounded-lg hover:rounded-full focus:outline-none"
    >{{ this.label }}</a>
</template>

<script>
export default {
    name: "PrimaryLinkButton",
    props: {
        href: String,
        label: String,
    },
}
</script>

<style scoped>

</style>
