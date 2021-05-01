
import Vue from 'vue'
import VueRouter from 'vue-router'

import DashboardComponent from './components/DashboardComponent.vue';
import DonationComponent from './components/DonationComponent.vue';
import MailComponent from './components/MailComponent.vue';

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: "/admin",
            name: "dashboard",
            component: DashboardComponent,
        },
        {
            path: "/donation",
            name: "donation",
            component: DonationComponent,
        },
        {
            path: "/mail",
            name: "mail",
            component: MailComponent,
        }
    ]
});

export default router;
