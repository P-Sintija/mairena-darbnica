require('./bootstrap')
// @ts-ignore
import Router from '@modules/router.ts';

Router.on('HomePageController@index', 'home/index.ts');
Router.run();

