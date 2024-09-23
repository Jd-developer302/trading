import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router';
import axios from 'axios';
import '@/assets/css/sb-admin-2.min.css'; 
const app = createApp(App);
app.config.globalProperties.$http = axios;


app.use(router); // Use the router
app.mount('#app');
