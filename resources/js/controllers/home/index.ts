import {createApp} from "vue";
// @ts-ignore
import HeroGrid from "./components/HeroGrid";
// @ts-ignore
import CategoryGrid from "./components/CategoryGrid";

const heroGrid = createApp({});
heroGrid.component('hero-grid', HeroGrid);
heroGrid.mount('#hero-grid');

const categoryGrid = createApp({});
categoryGrid.component('category-grid', CategoryGrid);
categoryGrid.mount('#category-grid');
