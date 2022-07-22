<template>
    <div class="container mx-auto px-5">
        <div class="md:pt-20 md:pb-14 pt-10 pb-4 ">
            <div class="mt-6 lg:mt-0 lg:px-2">

                <sort-order-nav></sort-order-nav>

                <product-grid></product-grid>

            </div>
        </div>
    </div>
</template>

<script>
import SortOrderNav from "./SortOrderNav";
import ProductGrid from "./ProductGrid";

export default {
    name: "CatalogGrid",
    components: {ProductGrid, SortOrderNav},
}
</script>

<style scoped>

</style>
