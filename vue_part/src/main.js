// import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import HomeView from './views/HomeView.vue'
import AboutView from './views/AboutView.vue'
import CircularView from './views/CircularView.vue'
import { createRouter, createWebHashHistory } from 'vue-router'
const routes=[
    {path:'/', component: HomeView},
    {path:'/about', component: AboutView},
    {path:'/circulation', component: CircularView},
];
const router=createRouter({
    history: createWebHashHistory(),
    routes,
})


createApp(App).use(router).mount('#app')
