import './bootstrap';
import "aos/dist/aos.css";
import AOS from "aos";
import Alpine from 'alpinejs';
import L from "leaflet";
import "leaflet/dist/leaflet.css";

AOS.init();
Alpine.start();
window.L = L;
