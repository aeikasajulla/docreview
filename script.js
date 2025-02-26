const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginButton = document.querySelector('.cta-button');
const closeButton = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
	wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
	wrapper.classList.remove('active');
});

loginButton.addEventListener('click', ()=> {
	wrapper.classList.add('active-popup');
});

closeButton.addEventListener('click', ()=> {
	wrapper.classList.remove('active-popup');
});