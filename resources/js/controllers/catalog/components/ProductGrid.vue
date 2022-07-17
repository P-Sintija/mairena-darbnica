<template>
    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        <product-card
            :image="'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'"
            :name="'Printed T-shirt'"
            :price="12.55"
        ></product-card>

        <product-card
            :image="'https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80'"
            :name="'Slub jersey T-shirt'"
            :price="18.70"
        ></product-card>

        <product-card
            :image="'https://images.unsplash.com/photo-1603320409990-02d834987237?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'"
            :name="'Printed T-shirt'"
            :price="16.55"
        ></product-card>

        <product-card
            :image="'https://images.unsplash.com/photo-1603320410149-db26b12d5c2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'"
            :name="'Art T-shirt'"
            :price="12.55"
        ></product-card>

        <product-card
            :image="'https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80'"
            :name="'Slub jersey T-shirt'"
            :price="18.70"
        ></product-card>

        <product-card
            :image="'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'"
            :name="'Printed T-shirt'"
            :price="12.55"
        ></product-card>

    </div>
</template>

<script>
import ProductCard from "./ProductCard";

export default {
    name: "ProductGrid",
    components: {ProductCard},
}
</script>

<style scoped>

</style>
