'use strict';

///////////////////////////////////////
// Modal window



const modalElements = {
  modal: document.querySelector('.modal'),
  overlay: document.querySelector('.overlay'),
  btnCloseModal: document.querySelector('.btn--close-modal'),
  btnsOpenModal: document.querySelectorAll('.btn--show-modal'),
};

function toggleModal(show) {
  const action = show ? 'remove' : 'add';
  modalElements.modal.classList[action]('hidden');
  modalElements.overlay.classList[action]('hidden');
}

if (modalElements.modal && modalElements.overlay) {
  modalElements.btnsOpenModal.forEach(btn =>
    btn.addEventListener('click', () => toggleModal(true))
  );

  modalElements.btnCloseModal.addEventListener('click', () => toggleModal(false));
  modalElements.overlay.addEventListener('click', () => toggleModal(false));
}





const h1 = document.querySelector('h1');

// Going downwards: child
console.log(h1.querySelectorAll('.highlight'));
console.log(h1.childNodes);
console.log(h1.children);
h1.firstElementChild.style.color = 'white';
//h1.lastElementChild.style.color = 'orangered';

// Going upwards: parents
console.log(h1.parentNode);
console.log(h1.parentElement);

// runs the element more near
//h1.closest('.header').style.background = 'var(--gradient-secondary)';
//h1.closest('h1').style.background = 'var(--gradient-primary)';




const link = document.querySelectorAll(".footer__item");
const tabs = document.querySelectorAll('.operations__tab');
const tabsContainer = document.querySelector('.operations');
const tabsContent = document.querySelectorAll('.operations__content');


tabsContainer.addEventListener('click', function (e) {
  const clicked = e.target.closest('.operations__tab');
  if (!clicked) return;

  // Activar pestaña
  tabs.forEach(t => t.classList.remove('operations__tab--active'));
  clicked.classList.add('operations__tab--active');

  // Mostrar contenido correspondiente
  tabsContent.forEach(c => c.classList.remove('operations__content--active'));
  document
    .querySelector(`.operations__content--${clicked.dataset.tab}`)
    .classList.add('operations__content--active');
});



const nav = document.querySelector('.nav')

const header = document.querySelector('.header');
const navHeight = nav.getBoundingClientRect().height;

const stickyNav = function (entries) {
  const [entry] = entries;
  // console.log(entry);

  if (!entry.isIntersecting) nav.classList.add('sticky');
  else nav.classList.remove('sticky');
};




const headerObserver = new IntersectionObserver
(stickyNav, {
root: null,
threshold: 0,
rootMargin: `-${navHeight}px`,
});
headerObserver.observe(header);

// Reveal sections
const allSections = document.querySelectorAll('.section');

const revealSection = function (entries, observer) {
entries.forEach(entry => {


entry.target.classList.remove('section--hidden')
})
};

const sectionObserver = new IntersectionObserver
(revealSection, {
root: null,
threshold: 0.15,
});

allSections.forEach(function (section) {
sectionObserver.observe(section);
section.classList.add('section--hidden');
});


const imgTargets = document.querySelectorAll('img[data-src]');


const loadImg = function (entries, observer) {
const [entry] = entries;
console.log(entry);
};

const imgObserver = new IntersectionObserver(loadImg,
{
  root: null,
  threshold: 0,
  rootMargin: '200px',
});

imgTargets.forEach(img => imgObserver.observe(img));

// Slider

const slides = document.querySelectorAll('.slide');
const btnLeft = document.querySelector('.slider__btn--left');
const btnRight = document.querySelector('.slider__btn--right');
let curSlide = 0;
const maxSlide = slides.length;

// Posicionar las slides inicialmente
slides.forEach((s, i) => {
  s.style.transform = `translateX(${100 * i}%)`;
});

// Función para ir a una slide específica
const goToSlide = function (slide) {
  slides.forEach((s, i) => {
    s.style.transform = `translateX(${100 * (i - slide)}%)`;
  });
};

// Botón derecho
btnRight.addEventListener('click', function () {
  curSlide = (curSlide + 1) % maxSlide;
  goToSlide(curSlide);
});

// Botón izquierdo
btnLeft.addEventListener('click', function () {
  curSlide = (curSlide - 1 + maxSlide) % maxSlide;
  goToSlide(curSlide);
});
