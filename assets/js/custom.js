document.addEventListener('DOMContentLoaded', function() {

  // Hide topbar on cross-mark click
  const closeBtn = document.querySelector('.topbar-close');
  closeBtn.addEventListener('click', () => {
    document.querySelector('.outside-topbar').style.display = 'none'
  });

  // Display mega menu on each el hover
  const menuItems = document.querySelectorAll('.menu-item');
  hideAllMenus();

  menuItems.forEach(item => {
    item.addEventListener('mouseover', function() {
      const menuItem = this.getAttribute('data-menu');
      hideAllMenus();
      document.querySelector(`.menu-item[data-menu="${menuItem}"] .mega-menu`).style.display = 'flex  ';
    });

    item.addEventListener('mouseout', function() {
      hideAllMenus();
    });
  });

  // Func to initially hide all mega menus
  function hideAllMenus() {
    const megaMenus = document.querySelectorAll('.mega-menu');
    megaMenus.forEach(menu => {
      menu.style.display = 'none';
    });
  }

  // Mobile multi level navigation toggle
  // First level selectors
  const btnHamburger = document.querySelector('.btn-hamburger');
  const btnClose = document.querySelector('.btn-close');
  const mobnav = document.querySelector('.mobile-menu');

  // Second level selectors
  const subBtnClose = document.querySelectorAll('.sub-btn-close');
  const subBtnBack = document.querySelectorAll('.sub-btn-back');
  const menuLinks = document.querySelectorAll('.mobile-nav li');
  const contentSections = document.querySelectorAll('.content-section')

  btnHamburger.addEventListener('click', function() {
    btnHamburger.classList.add('hidden');
    mobnav.classList.add('active');
    btnClose.classList.remove('hidden');
  });

  btnClose.addEventListener('click', function() {
    btnClose.classList.add('hidden');
    mobnav.classList.remove('active');
    btnHamburger.classList.remove('hidden');
  });

  menuLinks.forEach( link => {
    if( !link.getAttribute('data-target')) {
      return;
    }

    link.addEventListener('click', function(event) {
      event.preventDefault();

      mobnav.classList.remove('active');

      // Hide all content sections
      contentSections.forEach(section => {
        section.classList.remove('active');
      });

      // Show the target content section
      const targetId = link.getAttribute('data-target');
      const targetSection = document.getElementById(targetId);
      targetSection.classList.add('active');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    });
  });

  subBtnBack.forEach( btn => {
    btn.addEventListener( 'click', function() {
      mobnav.classList.add( 'active' );

      contentSections.forEach(section => {
        section.classList.remove('active');
      });
    });
  });

  subBtnClose.forEach(btn => {
    btn.addEventListener('click', function() {
      contentSections.forEach(section => {
        section.classList.remove('active');
      });
      btnClose.classList.add('hidden');
      mobnav.classList.remove('active');
      btnHamburger.classList.remove('hidden');
    });
  });

  // Synchronize Slider and Accordion
  const uagbSlider = document.querySelector('.uagb-swiper');

  if ( uagbSlider ){
    let interval = setInterval(() => {
      if( uagbSlider.swiper !== undefined ){
        const swiper = uagbSlider.swiper;
        clearInterval(interval);

        const accordin = document.querySelectorAll('.esab__head');

        accordin.forEach((acc, i) => {
          acc.addEventListener('click', (e) => {
            swiper.slideTo(i);
            accordin[i].click();
          });
        });

        swiper.on('slideChange', function (e) {
          if(accordin[e.activeIndex]){
            accordin[e.activeIndex].click();
          }
        });
      }
    }, 500);
  }

  // Mount splide slider1
  document.querySelectorAll('.slider1').forEach(splideElement => {
    const parentEl = splideElement.closest('.right-content');

    let splide = new Splide(splideElement, {
      type: 'slide',
      perPage: 4,
      pagination: false,
      arrows: false,
      autoHeight: true,
      breakpoints: {
        1250: {
          perPage: 3,
        },
        950: {
          perPage: 2,
        }
      }
    }).mount();

    // Get external SVG control elements
    if( ! parentEl ) {return;}
    const prevSvg = parentEl.querySelector('#prev-slide');
    const nextSvg = parentEl.querySelector('#next-slide');

    if( ! prevSvg || ! nextSvg ) {
      return;
    }

    // Func to update control colors based on current slide position
    function updateControlColors() {
      const currentIndex = splide.index;
      const totalSlides = splide.length;

      // Update prev control
      if (currentIndex > 0) {
        prevSvg.classList.add('slide');
      } else {
        prevSvg.classList.remove('slide');
      }

      // Update next control
      if (currentIndex < totalSlides - 1) {
        nextSvg.classList.add('slide');
      } else {
        nextSvg.classList.remove('slide');
      }
    }

    // Add event listeners to external SVG controls
    prevSvg.addEventListener('click', function () {
      splide.go('<'); // Go to previous slide
    });

    nextSvg.addEventListener('click', function () {
      splide.go('>'); // Go to next slide
    });

    // Update control colors on mount and after slide change
    splide.on('mounted move', updateControlColors);

    // Initial update of control colors
    updateControlColors();
  });

  // Initialize splide slider2
  new Splide('.slider2', {
    type: 'slide',
    perPage: 3,
    pagination: false,
    focus: 'center',
    arrows: false,
    autoHeight: true,
    breakpoints: {
      1250: {
        perPage: 3,
      },
      950: {
        perPage: 2,
      }
    }
  }).mount();

  new Splide( '#slider2' ).mount();
});
