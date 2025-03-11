import './bootstrap';

import Alpine from 'alpinejs';
import { persist } from '@alpinejs/persist';
import 'preline'; // Tambahkan ini

Alpine.plugin(persist);
window.Alpine = Alpine;

Alpine.start();
