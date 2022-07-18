<template>
    <div class="container mx-auto px-5">
        <div class="md:pt-20 md:pb-14 pt-10 pb-4 ">
            <div class="lg:flex lg:-mx-2 h-screen overflow-auto">
                <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4 sticky top-0">
                    <category-nav :href="'#'" :label="'Jackets & Coats'"></category-nav>
                    <category-nav :href="'#'" :label="'Hoodies'"></category-nav>
                    <category-nav :href="'#'" :label="'T-shirts & Vests'"></category-nav>
                    <category-nav :href="'#'" :label="'Shirts'"></category-nav>
                    <category-nav :href="'#'" :label="'Blazers & Suits'"></category-nav>
                    <category-nav :href="'#'" :label="'Jeans'"></category-nav>
                    <category-nav :href="'#'" :label="'Trousers'"></category-nav>
                    <category-nav :href="'#'" :label="'Shorts'"></category-nav>
                    <category-nav :href="'#'" :label="'Underwear'"></category-nav>
                </div>

                <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5">

                    <sort-order-nav></sort-order-nav>

                    <product-grid></product-grid>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CategoryNav from "./CategoryNav";
import SortOrderNav from "./SortOrderNav";
import ProductGrid from "./ProductGrid";

export default {
    name: "CatalogGrid",
    components: {ProductGrid, SortOrderNav, CategoryNav},
}
</script>

<style scoped>

</style>
