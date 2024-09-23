import { createRouter, createWebHistory } from 'vue-router';
import HomeAdminIndex from '../components/admin/home/index.vue';


const routes = [
    { path: '/admin/home',component: HomeAdminIndex,meta: { requiresAuth: true }   },
];
const router = createRouter({
    history: createWebHistory(),
    routes
});


// Example authentication logic
router.beforeEach((to, from, next) => {
    const isAuthenticated = !!localStorage.getItem('user-token'); // Check for token
    
    if (to.meta.requiresAuth && !isAuthenticated) {
        next({ name: 'Login' }); // Redirect to login if not authenticated
    } else {
        next(); // Proceed to the route
    }
});

export default router;
