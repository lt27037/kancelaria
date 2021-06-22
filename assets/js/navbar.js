const navbar = document.querySelector('.navbar');
const toTop = document.querySelector('.footer__toTop');

const handleChangeNavbar = () => {
    if (window.pageYOffset < 300){
        navbar.classList.add('navbar--transparent');
    } else {
        if(navbar.classList.contains('navbar--transparent')){
            navbar.classList.remove('navbar--transparent');
        }
    }
}

window.addEventListener('scroll', handleChangeNavbar);
handleChangeNavbar();

toTop.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior:'smooth'});
});




