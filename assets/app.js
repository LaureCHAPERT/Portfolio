import './styles/reset.css';
import './styles/app.css';

// Surligne dans la navigation la section actuellement visible
const navLinks = document.querySelectorAll('.main-nav a[href^="#"]');
const sections = [...navLinks].map(link => document.querySelector(link.getAttribute('href'))).filter(Boolean);

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }
        navLinks.forEach(link => {
            if (link.getAttribute('href') === `#${entry.target.id}`) {
                link.setAttribute('aria-current', 'true');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    });
}, { rootMargin: '-45% 0px -50% 0px' });

sections.forEach(section => observer.observe(section));

// Formulaire de contact
const form = document.getElementById('contact-form');
const flashbagContainer = document.getElementById('flashbag-container');

function showFlashMessage(message, isError = false) {
    flashbagContainer.replaceChildren();
    const flashbagDiv = document.createElement('div');
    flashbagDiv.classList.add('flashbag-message');
    flashbagDiv.classList.toggle('error', isError);
    flashbagDiv.setAttribute('role', isError ? 'alert' : 'status');
    flashbagDiv.textContent = message;
    flashbagContainer.appendChild(flashbagDiv);
    flashbagContainer.classList.remove('hidden');
}

form?.addEventListener('submit', (event) => {
    event.preventDefault();

    const submitButton = form.querySelector('[type="submit"]');
    submitButton.disabled = true;

    fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
    })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                throw new Error(data.message);
            }
            showFlashMessage(form.dataset.successMessage);
            form.reset();
        })
        .catch(error => {
            console.error(error);
            showFlashMessage(form.dataset.errorMessage, true);
        })
        .finally(() => {
            submitButton.disabled = false;
        });
});
