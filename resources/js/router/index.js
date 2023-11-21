import { createRouter, createWebHistory } from 'vue-router';
import Login from '../components/Login.vue';
import Register from '../components/Register.vue';
import Flashcard from '../components/Flashcard.vue';

const routes = [
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/flashcard', component: Flashcard },
    // Ajoutez d'autres routes ici
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
