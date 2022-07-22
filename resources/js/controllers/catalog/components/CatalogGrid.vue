<template>
    <div class="container mx-auto px-5">
        <div class="md:pt-20 md:pb-14 pt-10 pb-4 ">
            <div class="mt-6 lg:mt-0 lg:px-2">

                <sort-order-nav></sort-order-nav>

                <product-card-grid></product-card-grid>

            </div>
        </div>
    </div>
</template>

<script>
import SortOrderNav from "./SortOrderNav";
import ProductCardGrid from "./ProductCardGrid";

export default {
    name: "CatalogGrid",
    components: {ProductCardGrid, SortOrderNav},
}
</script>

<style scoped>

</style>
