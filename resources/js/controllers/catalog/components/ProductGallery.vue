<template>
    <div class="md:w-1/2 lg:w-2/5 md:block hidden">
        <div class="h-96 bg-cover bg-center rounded-lg"
             v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80)'}"
        ></div>

        <div class="grid gap-8 mt-8 grid-cols-2">
            <div class="h-56 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80)'}"
            ></div>
            <div class="h-56 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1603320409990-02d834987237?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80)'}"
            ></div>
            <div class="h-56 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80)'}"
            ></div>
        </div>
    </div>
    <div class="md:hidden">
        <div class="h-96 bg-cover bg-center rounded-lg"
             v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80)'}"
        ></div>
        <div class="grid grid-cols-3 gap-4 mt-6">
            <div class="h-40 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1620799139507-2a76f79a2f4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80)'}"
            ></div>
            <div class="h-40 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1603320409990-02d834987237?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80)'}"
            ></div>
            <div class="h-40 bg-cover bg-center rounded-lg"
                 v-bind:style="{ 'background-image': 'url(https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80)'}"
            ></div>
        </div>
    </div>

</template>

<script>
export default {
    name: "ProductGallery"
}
</script>

<style scoped>

</style>
