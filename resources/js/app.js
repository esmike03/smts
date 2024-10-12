import './bootstrap';

import Alpine from 'alpinejs';
import 'animate.css';

window.Alpine = Alpine;

Alpine.start();

const buttons = document.querySelectorAll('.tab-button');
const sections = document.querySelector('.slidable-sections');

buttons.forEach((button) => {
    button.addEventListener('click', () => {
        const targetIndex = button.getAttribute('data-target');

        // Update active button styles
        buttons.forEach((btn) => btn.classList.remove('active'));
        button.classList.add('active');

        // Slide to the selected section
        sections.style.transform = `translateX(-${targetIndex * 50}%)`;
    });
});


