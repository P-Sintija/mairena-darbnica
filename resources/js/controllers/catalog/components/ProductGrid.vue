<template>
    <div class="container mx-auto px-5 md:flex items-start justify-center md:pt-24 md:pb-14 pt-10 pb-4 w-full">

        <product-gallery></product-gallery>

        <div class="md:w-1/2 lg:w-3/5 lg:ml-10 md:ml-6 md:mt-0 mt-6">

            <div>
                <h1 class="text-text-gray-1 text-2xl font-medium">Nike epic react flyknit</h1>
                <h3 class="text-dark-highlighted text-2xl font-semibold mb-7 mt-2">150 $</h3>
                <p class="text-text-gray-2 text-justify mb-7">
                    The Nike Epic React Flyknit 1 provides crazy comfort that lasts as long as you can run. Its Nike
                    React foam cushioning is responsive yet lightweight, durable yet soft. This attraction of opposites
                    creates a sensation that not only enhances the feeling of moving forwards, but makes running feel
                    fun, too.
                </p>

                <select-field></select-field>

                <div class="flex items-center flex-col space-y-4 mt-12 mb-5">
                    <add-to-cart-button></add-to-cart-button>

                    <add-to-wish-list-button></add-to-wish-list-button>
                </div>

            </div>



            <div v-for="(item, index) in this.details">
                <div class="border-b border-br-gray-1">
                    <button
                        class="py-7 text-text-gray-1 hover:text-dark-highlighted flex justify-between items-center w-full"
                        @click="openAnsSection(index)">

                        <h3 class="font-semibold text-xl leading-5">{{ item.label }}</h3>

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path :id="'path'.concat(index)" class="" d="M10 4.1665V15.8332" stroke="currentColor"
                                  stroke-width="1.25"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <p :id="'para'.concat(index)"
                       class="hidden text-base leading-6 text-text-gray-2 text-justify mb-4">
                        {{ item.text }}</p>
                </div>

            </div>

        </div>
    </div>

</template>

<script>
import ProductGallery from "./ProductGallery";
import SelectField from "../../../globals/forms/SelectField";
import AddToCartButton from "../../../globals/buttons/primary/AddToCartButton";
import AddToWishListButton from "../../../globals/buttons/secondary/AddToWishlistButton";

export default {
    name: "ProductGrid",
    components: {AddToWishListButton, AddToCartButton, SelectField, ProductGallery},
    data() {
        return {
            details: [],
        }
    },
    mounted() {
        this.details = [
            {
                label: 'Shipping',
                text: 'We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.',
            },
            {
                label: 'Returns',
                text: 'We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.',
            },
            {
                label: 'Exchange',
                text: 'We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.',
            },
            {
                label: 'Tracking',
                text: 'We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.',
            },
        ]
    },
    methods: {
        openAnsSection(val) {
            console.log(val)
            var p = document.getElementById("para" + val);
            var svg = document.getElementById("path" + val);

            if (p.classList.contains("hidden")) {
                p.classList.remove("hidden");
                p.classList.add("block");
            } else {
                p.classList.remove("block");
                p.classList.add("hidden");
            }

            if (svg.classList.contains("hidden")) {
                svg.classList.remove("hidden");
                svg.classList.add("block");
            } else {
                svg.classList.remove("block");
                svg.classList.add("hidden");
            }
        },
    }
}
</script>

<style scoped>

</style>
