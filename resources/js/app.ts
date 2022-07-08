require('./bootstrap');
// @ts-ignore
import Router from '@modules/router.ts';
import {createApp} from "vue";
// @ts-ignore
import HeaderGrid from "./globals/header/HeaderGrid";

Router.on('HomePageController@index', 'home/index.ts');
Router.run();

const app = createApp({});
app.component('header-grid', HeaderGrid);
app.mount('#header-grid');
