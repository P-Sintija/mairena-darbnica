import {createApp} from "vue";
//@ts-ignore
import CatalogGrid from "./components/CatalogGrid";

const catalogGrid = createApp({});
catalogGrid.component('catalog-grid', CatalogGrid);
catalogGrid.mount('#catalog-grid');

