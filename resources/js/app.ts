require('./bootstrap');

import Router from '@modules/router.ts';
import {createApp} from "vue";
import HeaderGrid from "./globals/header/HeaderGrid";
import FooterGrid from "./globals/footer/FooterGrid";

Router.on('HomePageController@index', 'home/index.ts');
Router.on('CatalogPageController@index', 'catalog/index.ts');
Router.on('CatalogPageController@show', 'catalog/show.ts');
Router.run();

const header = createApp({});
header.component('header-grid', HeaderGrid);
header.mount('#header-grid');

const footer = createApp({});
footer.component('footer-grid', FooterGrid);
footer.mount('#footer-grid');
