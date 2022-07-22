import {createApp} from "vue";
import CatalogGrid from "./components/CatalogGrid";
import CategoryMenu from "../../globals/category-menu/CategoryMenu.vue";

const categoryMenu = createApp({});
categoryMenu.component('category-menu', CategoryMenu);
categoryMenu.mount('#category-menu');

const catalogGrid = createApp({});
catalogGrid.component('catalog-grid', CatalogGrid);
catalogGrid.mount('#catalog-grid');

