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