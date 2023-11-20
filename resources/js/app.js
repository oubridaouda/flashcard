import './bootstrap';
import { createApp } from 'vue';
import flashcard from './components/flashcard.vue';

const app = createApp({});

app.component('flashcard', flashcard);

app.mount('#app');
