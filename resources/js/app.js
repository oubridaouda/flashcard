import './bootstrap';
import { createApp } from 'vue';
import router from './router'; // Assurez-vous que le chemin est correct
import App from './App.vue';

// Créer l'application Vue
const app = createApp(App);

// Utiliser Vue Router
app.use(router);

// Monter l'application
app.mount('#app');
