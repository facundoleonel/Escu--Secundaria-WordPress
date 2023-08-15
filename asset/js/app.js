// creamos una variable para llamar a la clase MENU
const menuHamICon = document.querySelector('.menu');
const mobileMenu = document.querySelector('.main-nav'); 
// toggle: hace que aprezca y desaparezca el MENU
menuHamICon.addEventListener('click',toggleMobilMenu);

function toggleMobilMenu(){
    const isMobileMenuClosed= mobileMenu.classList.contains('inactive');
    if(!isMobileMenuClosed){
        mobileMenu.classList.add('inactive');  
    }else {
        mobileMenu.classList.toggle('inactive');
    }  
}
