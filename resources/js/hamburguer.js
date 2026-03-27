const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');
const overlay = document.getElementById('overlay');

const bar1 = document.getElementById('bar1');
const bar2 = document.getElementById('bar2');
const bar3 = document.getElementById('bar3');

let isOpen = false;

toggle.addEventListener('click', () => {
    isOpen = !isOpen;

    menu.style.maxHeight = isOpen ? menu.scrollHeight + 'px' : '0';

    overlay.style.opacity = isOpen ? '1' : '0';
    overlay.style.pointerEvents = isOpen ? 'auto' : 'none';

    bar1.style.transform = isOpen ? 'translateY(8px) rotate(45deg)' : '';
    bar2.style.opacity = isOpen ? '0' : '1';
    bar3.style.transform = isOpen ? 'translateY(-8px) rotate(-45deg)' : '';
});

overlay.addEventListener('click', () => {
    isOpen = false;

    menu.style.maxHeight = '0';
    overlay.style.opacity = '0';
    overlay.style.pointerEvents = 'none';

    bar1.style.transform = '';
    bar2.style.opacity = '1';
    bar3.style.transform = '';
});