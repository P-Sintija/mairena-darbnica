import {createApp} from "vue";
import CategoryMenu from "../../globals/category-menu/CategoryMenu.vue";

const categoryMenu = createApp({});
categoryMenu.component('category-menu', CategoryMenu);
categoryMenu.mount('#category-menu');
