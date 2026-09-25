/* ════════════════════════════════════════════════════════════════
   MAIN JAVASCRIPT — Dr. Aninda Sidhana Portfolio & Protocols
════════════════════════════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {
  // Sticky Navbar scroll state handler
  const nv = document.getElementById('nv');
  if (nv) {
    window.addEventListener('scroll', () => {
      nv.classList.toggle('on', window.scrollY > 60);
    }, { passive: true });
  }

  // Scroll Reveal Animations via Intersection Observer
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.09 });

  document.querySelectorAll('.rv').forEach(el => io.observe(el));

  // Smooth scroll for hash navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#' || href === '' || href === '#top') {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
        return;
      }
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navHeight = nv ? nv.offsetHeight : 80;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - navHeight - 10;
        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
        if (nv && nv.classList.contains('nav-open')) {
          nv.classList.remove('nav-open');
        }
      }
    });
  });

  // Clean URL hash on page load after scroll positioning
  if (window.location.hash && window.history.replaceState) {
    setTimeout(() => {
      const hash = window.location.hash;
      const target = document.querySelector(hash);
      if (target) {
        const navHeight = nv ? nv.offsetHeight : 80;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - navHeight - 30;
        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
      }
      window.history.replaceState(null, null, window.location.pathname + window.location.search);
    }, 50);
  }
});

// Helper function to sanitize user input before template construction
function sanitizeHTML(str) {
  const temp = document.createElement('div');
  temp.textContent = str;
  return temp.innerHTML;
}

// Contact form submission handler
function handleFormSubmit(e) {
  e.preventDefault();

  // Honeypot bot protection check
  const hp = document.getElementById('hp_field');
  if (hp && hp.value !== "") {
    return; // Bot detected, silently abort
  }

  const fnEl = document.getElementById('fn');
  const lnEl = document.getElementById('ln');
  const emEl = document.getElementById('em');
  const ogEl = document.getElementById('og');
  const tyEl = document.getElementById('ty');
  const msEl = document.getElementById('ms');

  const fn = fnEl ? sanitizeHTML(fnEl.value.trim()) : '';
  const ln = lnEl ? sanitizeHTML(lnEl.value.trim()) : '';
  const em = emEl ? sanitizeHTML(emEl.value.trim()) : '';
  const og = ogEl ? sanitizeHTML(ogEl.value.trim()) : '';
  const ty = tyEl ? sanitizeHTML(tyEl.value) : '';
  const ms = msEl ? sanitizeHTML(msEl.value.trim()) : '';

  const targetEmail = "minds@dranindasidhana.com";
  const subject = encodeURIComponent(`Professional Engagement Inquiry: ${ty} from ${fn} ${ln}`);
  const bodyText = `Name: ${fn} ${ln}\nEmail: ${em}\nOrganisation: ${og}\nInquiry Type: ${ty}\n\nMessage:\n${ms}`;
  const body = encodeURIComponent(bodyText);

  window.location.href = `mailto:${targetEmail}?subject=${subject}&body=${body}`;

  alert("Thank you! Your email client has been opened to send this inquiry.");
  const contactForm = document.getElementById('contactForm');
  if (contactForm) contactForm.reset();
}
