// header.innerHTML = `<h1>Enlace LLC</h1>
// <h2>Asesoría legal para mexicanos en Estados Unidos</h3>`

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', ()=>{
        //toggle nav
        nav.classList.toggle('nav-active');
        //animate links
        navLinks.forEach((link, index )=>{
            if (link.style.animation){
                link.style.animation = '';
            }else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + .3}s`;
            console.log(index/7)
            }
            
        });
        // //burger animation
        // burger.classList.toggle('toggle');
    });
    
    

}
navSlide();
// const app = () =>{
//     navSlide();
// }
