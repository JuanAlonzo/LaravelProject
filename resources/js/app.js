import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var splide = new Splide( '.splide', {
    type  : 'fade',
    gap: '1rem',
    rewind: true,
    autoplay: true,
} );

splide.mount();