import './bootstrap';
import flatpickr from "flatpickr";
window.flatpickr  = flatpickr;

import tippy from 'tippy.js';
window.tippy  = tippy;

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
