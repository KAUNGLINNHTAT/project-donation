
import Vue from 'vue'
import VueRouter from 'vue-router'

import DashboardComponent from './components/DashboardComponent.vue';
import DonationComponent from './components/DonationComponent.vue';
import MailComponent from './components/MailComponent.vue';
import MemberComponent from './components/Member/MemberComponent.vue';
import MemberAddComponent from './components/Member/MemberAddComponent.vue';
import MemberEditComponent from './components/Member/MemberEditComponent.vue';

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
            path: "/admin/donation",
            name: "donation",
            component: DonationComponent,
        },
        {
            path: "/admin/donation",
            name: "mail",
            component: MailComponent,
        },
        {
            path: "/admin/member",
            name: "member",
            component: MemberComponent,
        },
        {
            path: "/admin/member/add",
            name: "member-add",
            component: MemberAddComponent,
        },
        {
            path: "/admin/member/:id/edit",
            name: "member-edit",
            component: MemberEditComponent
        },
    ]
});

export default router;
