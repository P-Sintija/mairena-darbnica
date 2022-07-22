import {createApp} from "vue";
import CategoryMenu from "../../globals/category-menu/CategoryMenu.vue";
import ProductGrid from "./components/ProductGrid.vue";

const categoryMenu = createApp({});
categoryMenu.component('category-menu', CategoryMenu);
categoryMenu.mount('#category-menu');

const productGrid = createApp({});
productGrid.component('product-grid', ProductGrid);
productGrid.mount('#product-grid');
