<template>
    <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
        <p class="text-gray-500 dark:text-gray-300">6 Items</p>
        <div class="flex items-center">
            <p class="text-gray-500 dark:text-gray-300">Sort</p>
            <select class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                <option value="#">Recommended</option>
                <option value="#">Size</option>
                <option value="#">Price</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    name: "SortOrderNav"
}
</script>

<style scoped>

</style>
