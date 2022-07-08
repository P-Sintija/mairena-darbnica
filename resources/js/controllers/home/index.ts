import {createApp} from "vue";
// @ts-ignore
import HeroGrid from "./components/HeroGrid";

const app = createApp({});
app.component('hero-grid', HeroGrid);
app.mount('#hero-grid');
