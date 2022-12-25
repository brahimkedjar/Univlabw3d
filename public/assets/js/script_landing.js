const navEL = document.querySelector('.navbar');
window.addEventListener('scroll' , () => {
    if (window.scrollY > 450 ) {
        console.log('hello world');
        navEL.classList.add('bg-light','navbar-light');
        navEL.classList.remove('bg-dark','navbar-dark');
    }else if (window.scrollY < 450) {
        navEL.classList.remove('bg-light','navbar-light');
        navEL.classList.add('bg-dark','navbar-dark');
    }
});




const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

