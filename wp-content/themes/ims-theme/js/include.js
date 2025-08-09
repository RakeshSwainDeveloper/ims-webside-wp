document.addEventListener('DOMContentLoaded', () => {
  setActiveNavLink();
  enableDropdownMenus();
  adjustBodyPadding();
  window.addEventListener('resize', adjustBodyPadding);
});

function adjustBodyPadding() {
  const header = document.querySelector('.site-header');
  if (header) {
    requestAnimationFrame(() => {
      const height = header.offsetHeight;
      document.body.style.paddingTop = `${height}px`;
    });
  }
}

function setActiveNavLink() {
  const currentUrl = window.location.href;
  const navLinks = document.querySelectorAll('.nav-links a');

  navLinks.forEach(link => {
    if (link.href === currentUrl || link.href === currentUrl + '/') {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
}

function enableDropdownMenus() {
  const dropdownItems = document.querySelectorAll('.nav-links .has-submenu');
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const navWrapper = document.querySelector('.nav-wrapper');

  if (mobileToggle && navWrapper) {
    mobileToggle.addEventListener('click', () => {
      navWrapper.classList.toggle('open');
    });
  }

  dropdownItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      if (window.innerWidth >= 768) item.classList.add('open');
    });

    item.addEventListener('mouseleave', () => {
      if (window.innerWidth >= 768) item.classList.remove('open');
    });

    const triggerLink = item.querySelector('a:not([href="#"])');
    if (triggerLink) {
      triggerLink.addEventListener('click', e => {
        if (window.innerWidth < 768) {
          e.preventDefault();
          item.classList.toggle('open');
        }
      });
    }
  });
}
