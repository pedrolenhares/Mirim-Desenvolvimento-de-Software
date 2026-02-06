document.addEventListener('DOMContentLoaded', () => {
  const img = document.getElementById('carouselImage');
  const textSlides = document.querySelectorAll('.carousel-text-slide');
  const tabBtns = document.querySelectorAll('.tab-btn-v3');

  if (!img || !textSlides.length) return;

  let currentSlide = 0;

  const slides = [
    '/images/orange_phones.jpg',
    '/images/orange_notebook.jpg',
    '/images/orange_computer.jpg'
  ];

  function goToSlide(index) {
    currentSlide = index;

    textSlides.forEach((slide, i) => {
      slide.classList.toggle('opacity-100', i === index);
      slide.classList.toggle('opacity-0', i !== index);
      slide.classList.toggle('pointer-events-auto', i === index);
      slide.classList.toggle('pointer-events-none', i !== index);
      slide.classList.toggle('z-10', i === index);
      slide.classList.toggle('z-0', i !== index);
    });

    tabBtns.forEach((btn, i) => {
      btn.classList.toggle('active', i === index);
      btn.classList.toggle('text-gray-400', i !== index);
    });

    img.classList.remove('opacity-100');
    img.classList.add('opacity-0');

    setTimeout(() => {
      img.src = slides[index];
      img.classList.remove('opacity-0');
      img.classList.add('opacity-100');
    }, 300);
  }

  function startAutoSlide() {
    setInterval(() => {
      goToSlide((currentSlide + 1) % slides.length);
    }, 5000);
  }

  window.goToSlide = goToSlide;

  goToSlide(0);
  startAutoSlide();
});
