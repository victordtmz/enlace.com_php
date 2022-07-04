const burger = document.querySelector('.burger');
const navMenu = document.querySelector('.nav-menu');

burger.addEventListener('click',() =>{
    burger.classList.toggle('active');
    navMenu.classList.toggle('active');
} )




// const navSlide = () => {
//     const burger = document.querySelector('.burger');
//     const nav = document.querySelector('.nav-menu');
//     const navLinks = document.querySelectorAll('.nav-menu li');

//     burger.addEventListener('click', ()=>{
//         //toggle nav
//         nav.classList.toggle('nav-active');
//         //animate links
//         navLinks.forEach((link, index )=>{
//             if (link.style.animation){
//                 link.style.animation = '';
//             }else{
//                 link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + .3}s`;
//             console.log(index/7)
//             }
            
//         });
//         // //burger animation
//         // burger.classList.toggle('toggle');
//     });
    
    

// }
// navSlide();
// const app = () =>{
//     navSlide();
// }
