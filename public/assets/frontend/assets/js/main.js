/**
* Template Name: SoftLand
* Updated: Jan 09 2024 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Highlight swiper
   */
  // Check if mobile device
  const isMobile = window.innerWidth <= 767;
  console.log('Window width:', window.innerWidth, 'Is mobile:', isMobile);

  if (select('.highlightSwiper')) {
    console.log('Highlight swiper element found, initializing...');
    console.log('Is mobile:', isMobile);
    console.log('Window width:', window.innerWidth);

    const swiper = new Swiper('.highlightSwiper', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: isMobile ? 6000 : 3000, // 6 seconds on mobile, 3 seconds on desktop
        disableOnInteraction: false
      },
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
      },
    });

    console.log('Highlight swiper initialized');
    console.log('Swiper instance:', swiper);
    console.log('Pagination element:', select('.swiper-pagination'));

    // Force pagination creation for mobile
    if (isMobile) {
      setTimeout(() => {
        const paginationEl = select('.swiper-pagination');
        if (paginationEl && swiper.slides.length > 1) {
          console.log('Forcing pagination creation for mobile');
          swiper.pagination.render();
          swiper.pagination.update();

          // If still no bullets, create them manually
          if (paginationEl.children.length === 0) {
            console.log('Creating pagination bullets manually');
            for (let i = 0; i < swiper.slides.length; i++) {
              const bullet = document.createElement('span');
              bullet.className = 'swiper-pagination-bullet';
              bullet.style.width = '12px';
              bullet.style.height = '12px';
              bullet.style.background = 'rgba(0, 123, 255, 0.5)';
              bullet.style.borderRadius = '50%';
              bullet.style.margin = '0 4px';
              bullet.style.opacity = '1';
              bullet.style.cursor = 'pointer';
              bullet.style.border = '1px solid #007bff';
              bullet.style.display = 'inline-block';
              if (i === 0) {
                bullet.classList.add('swiper-pagination-bullet-active');
                bullet.style.background = '#007bff';
                bullet.style.transform = 'scale(1.2)';
              }
              bullet.addEventListener('click', () => {
                swiper.slideTo(i);
              });
              paginationEl.appendChild(bullet);
            }
          }
        }
      }, 100);
    }
  } else {
    console.log('Highlight swiper element not found');
  }

  /**
   * Logo swiper
   */
  new Swiper('.logoSwiper', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()