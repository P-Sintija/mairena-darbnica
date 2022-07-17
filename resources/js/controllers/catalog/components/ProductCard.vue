<template>
    <div @mouseover="this.isTarget = true"
         @mouseleave="this.isTarget = false"
         class="product-card flex flex-col items-center justify-center w-full max-w-lg cursor-pointer">
        <img class="object-cover w-full rounded-md h-72 xl:h-80"
             :class="{ 'scale-105 transition-all transform duration-500': this.isTarget }"
             :src="this.image" :alt="this.name"
        >

        <h4 class="mt-4 text-lg text-text-gray-2 uppercase"
            :class="{ 'text-dark-highlighted': this.isTarget }"
        >{{ this.name }}</h4>
        <p class="text-text-gray-1">{{ this.price }}$</p>

        <add-to-cart-button class="mt-4 mb-6"></add-to-cart-button>
    </div>
</template>

<script>
import AddToCartButton from "../../../globals/buttons/primary/AddToCartButton";

export default {
    name: "ProductCard",
    components: {AddToCartButton},
    props: {
        image: String,
        name: String,
        price: Number,
    },
    data() {
        return {
            isTarget: false,
        }
    },
}
</script>

<style scoped>

</style>
