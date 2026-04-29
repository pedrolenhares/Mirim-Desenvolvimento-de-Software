const defaultConfig = {
  duration: 1000,
  distance: '60px',
  easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
};

function buildTransition({ duration, easing }) {
  return `opacity ${duration}ms ${easing}, transform ${duration}ms ${easing}`;
}

function getTransform(origin, scale) {
  const transforms = {
    bottom: `translateY(${defaultConfig.distance})`,
    top:    `translateY(-${defaultConfig.distance})`,
    left:   `translateX(-${defaultConfig.distance})`,
    right:  `translateX(${defaultConfig.distance})`,
  };
  const base = transforms[origin] || transforms.bottom;
  return scale ? `${base} scale(${scale})` : base;
}

function reveal(selector, { delay = 0, origin = 'bottom', scale, interval = 0 } = {}) {
  const elements = document.querySelectorAll(selector);

  elements.forEach((el, i) => {
    const itemDelay = delay + (interval ? i * interval : 0);

    Object.assign(el.style, {
      opacity: '0',
      transform: getTransform(origin, scale),
      transition: buildTransition(defaultConfig),
    });

    const observer = new IntersectionObserver(([entry]) => {
      if (!entry.isIntersecting) return;
      setTimeout(() => {
        el.style.opacity = '1';
        el.style.transform = scale ? `scale(1)` : 'translate(0)';
      }, itemDelay);
      observer.unobserve(el);
    }, { threshold: 0.15 });

    observer.observe(el);
  });
}


reveal('section',  { origin: 'bottom' });
reveal('h1, h2',  { delay: 100, origin: 'bottom' });
reveal('p',       { delay: 200, origin: 'bottom' });
reveal('img',     { delay: 300, origin: 'bottom', scale: 0.95 });
reveal('.card',   { interval: 120 });