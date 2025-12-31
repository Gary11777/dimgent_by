import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

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