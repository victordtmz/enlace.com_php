document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', ()=> {
        const accordionContent = button.nextElementSibling;
        button.classList.toggle('accordion-button-active');
        if(button.classList.contains('accordion-button-active')){
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
        }else{
            accordionContent.style.maxHeight = 0;
        }

    });
});

console.log('Executing')
// changeBg()
const changeBg = () => {
    var host_ = window.location.host 
    if (host_ == 'localhost'){
        var bg_imgs = [
            'url("/enlacellc.com/private/images/bg/01.jpg")',
            'url("/enlacellc.com/private/images/bg/02.jpg")',
            'url("/enlacellc.com/private/images/bg/03.jpg")',
            'url("/enlacellc.com/private/images/bg/04.jpg")',
            'url("/enlacellc.com/private/images/bg/05.jpg")',
            'url("/enlacellc.com/private/images/bg/06.jpg")',
            'url("/enlacellc.com/private/images/bg/07.jpg")',
            'url("/enlacellc.com/private/images/bg/08.jpg")',
            'url("/enlacellc.com/private/images/bg/09.jpg")',
            'url("/enlacellc.com/private/images/bg/10.jpg")',
            'url("/enlacellc.com/private/images/bg/11.jpg")',
            'url("/enlacellc.com/private/images/bg/12.jpg")',
            'url("/enlacellc.com/private/images/bg/13.jpg")',
            'url("/enlacellc.com/private/images/bg/14.jpg")',
            'url("/enlacellc.com/private/images/bg/15.jpg")',
            'url("/enlacellc.com/private/images/bg/16.jpg")',
            'url("/enlacellc.com/private/images/bg/17.jpg")',
            'url("/enlacellc.com/private/images/bg/18.jpg")',
            'url("/enlacellc.com/private/images/bg/19.jpg")',
        ]
    }else{
        var bg_imgs = [
            'url("/private/images/bg/01.jpg")',
            'url("/private/images/bg/02.jpg")',
            'url("/private/images/bg/03.jpg")',
            'url("/private/images/bg/04.jpg")',
            'url("/private/images/bg/05.jpg")',
            'url("/private/images/bg/06.jpg")',
            'url("/private/images/bg/07.jpg")',
            'url("/private/images/bg/08.jpg")',
            'url("/private/images/bg/09.jpg")',
            'url("/private/images/bg/10.jpg")',
            'url("/private/images/bg/11.jpg")',
            'url("/private/images/bg/12.jpg")',
            'url("/private/images/bg/13.jpg")',
            'url("/private/images/bg/14.jpg")',
            'url("/private/images/bg/15.jpg")',
            'url("/private/images/bg/16.jpg")',
            'url("/private/images/bg/17.jpg")',
            'url("/private/images/bg/18.jpg")',
            'url("/private/images/bg/19.jpg")',
        ]
    }

    const content = document.querySelector('.content');
    const bg = bg_imgs[Math.floor(Math.random() * bg_imgs.length)];
    content.style.backgroundImage = bg;

}
changeBg()
setInterval(changeBg, 100000)