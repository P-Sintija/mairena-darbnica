<template>
    <div class="container mx-auto px-5">
        <div class="md:py-20 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <category-card-vertical
                    :backgroundUrl="'https://i.ibb.co/QHS8Ngp/pexels-alana-sousa-3294250-1.png'"
                    :href="'#'"
                    :label="'Lounge Chair'"
                ></category-card-vertical>

                <category-card-vertical
                    :backgroundUrl="'https://i.ibb.co/T8jgRy3/pexels-leah-kelley-1449667-1.png'"
                    :href="'#'"
                    :label="'Lounge Chair'"
                ></category-card-vertical>

                <category-card-vertical
                    :backgroundUrl="'https://i.ibb.co/F3dzNWD/pexels-spencer-selover-775358-1.png'"
                    :href="'#'"
                    :label="'Lounge Chair'"
                ></category-card-vertical>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-6 lg:gap-8 mt-4 md:mt-6 lg:mt-8">

                <category-card-horizontal
                    :backgroundUrl="'https://i.ibb.co/DwcwgDP/pexels-chevanon-photography-1108099-1.png'"
                    :href="'#'"
                    :label="'Lounge Chair'"
                ></category-card-horizontal>

                <category-card-horizontal
                    :backgroundUrl="'https://i.ibb.co/QHS8Ngp/pexels-alana-sousa-3294250-1.png'"
                    :href="'#'"
                    :label="'Lounge Chair'"
                ></category-card-horizontal>
            </div>

        </div>
    </div>

</template>

<script>
import CategoryCardVertical from "../../../globals/categories/CategoryCardVertical";
import CategoryCardHorizontal from "../../../globals/categories/CategoryCardHorizontal";

export default {
    name: "CategoryGrid",
    components: {CategoryCardHorizontal, CategoryCardVertical}
}
</script>

<style scoped>

</style>
