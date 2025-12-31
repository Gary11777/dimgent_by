import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

window.Alpine = Alpine;
Alpine.plugin(collapse);

Alpine.data('obfuscatedPhone', (parts) => ({
    parts: parts,
    get displayPhone() {
        return this.parts.join('');
    },
    get telLink() {
        return this.parts.join('').replace(/[\s\-]/g, '');
    },
    call() {
        window.location.href = 'tel:' + this.telLink;
    }
}));

Alpine.start();