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
    console.log(host_)
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
            'url("https://enlacellc.com/private/images/bg/01.jpg")',
            'url("https://enlacellc.com/private/images/bg/02.jpg")',
            'url("https://enlacellc.com/private/images/bg/03.jpg")',
            'url("https://enlacellc.com/private/images/bg/04.jpg")',
            'url("https://enlacellc.com/private/images/bg/05.jpg")',
            'url("https://enlacellc.com/private/images/bg/06.jpg")',
            'url("https://enlacellc.com/private/images/bg/07.jpg")',
            'url("https://enlacellc.com/private/images/bg/08.jpg")',
            'url("https://enlacellc.com/private/images/bg/09.jpg")',
            'url("https://enlacellc.com/private/images/bg/10.jpg")',
            'url("https://enlacellc.com/private/images/bg/11.jpg")',
            'url("https://enlacellc.com/private/images/bg/12.jpg")',
            'url("https://enlacellc.com/private/images/bg/13.jpg")',
            'url("https://enlacellc.com/private/images/bg/14.jpg")',
            'url("https://enlacellc.com/private/images/bg/15.jpg")',
            'url("https://enlacellc.com/private/images/bg/16.jpg")',
            'url("https://enlacellc.com/private/images/bg/17.jpg")',
            'url("https://enlacellc.com/private/images/bg/18.jpg")',
            'url("https://enlacellc.com/private/images/bg/19.jpg")',
            'url("https://enlacellc.com/private/images/bg/20.jpg")',
            'url("https://enlacellc.com/private/images/bg/21.jpg")',
            'url("https://enlacellc.com/private/images/bg/22.jpg")',
            'url("https://enlacellc.com/private/images/bg/23.jpg")',
            'url("https://enlacellc.com/private/images/bg/24.jpg")',
            'url("https://enlacellc.com/private/images/bg/25.jpg")',
            'url("https://enlacellc.com/private/images/bg/26.jpg")',
        ]
    }

    const content = document.querySelector('.content');
    const bg = bg_imgs[Math.floor(Math.random() * bg_imgs.length)];
    content.style.backgroundImage = bg;

}
changeBg()
setInterval(changeBg, 100000)