<template>
    <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

        <product-card class="reveal"
                      :image="'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'"
                      :name="'Printed T-shirt'"
                      :price="12.55"
        ></product-card>

        <product-card class="reveal"
                      :image="'https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80'"
                      :name="'Slub jersey T-shirt'"
                      :price="18.70"
        ></product-card>

        <product-card class="reveal"
                      :image="'https://images.unsplash.com/photo-1603320409990-02d834987237?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'"
                      :name="'Printed T-shirt'"
                      :price="16.55"
        ></product-card>

        <product-card class="reveal"
                      :image="'https://images.unsplash.com/photo-1603320410149-db26b12d5c2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'"
                      :name="'Art T-shirt'"
                      :price="12.55"
        ></product-card>

        <product-card class="reveal"
                      :image="'https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80'"
                      :name="'Slub jersey T-shirt'"
                      :price="18.70"
        ></product-card>

        <product-card class="reveal"
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
    created() {
        window.addEventListener('scroll', this.reveal);
        window.addEventListener('load', this.reveal);
    },
    destroyed() {
        window.removeEventListener('scroll', this.reveal);
        window.removeEventListener('load', this.reveal);
    },
    methods: {
        reveal() {
            const reveals = document.querySelectorAll(".reveal")

            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = reveals[i].getBoundingClientRect().top;
                const elementVisible = 80;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        },
    }
}
</script>

<style scoped>
.reveal {
    position: relative;
    transform: translateY(80px);
    opacity: 0;
    transition: 1.5s all ease;
}

.reveal.active {
    transform: translateY(0);
    opacity: 1;
}
</style>
