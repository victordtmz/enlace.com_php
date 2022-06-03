
const sendEmail = () => {
    const nombre = document.querySelector("#contact-name").value;
        telefono = document.querySelector("#contact-phone").value;
        email = document.querySelector("#contact-email").value;
        consulta = document.querySelector("#contact-inquiry").value;
        pais = '';

        body = "Solicitante: " + nombre + 
                "<br> Telefono: " + telefono +
                "<br> email: " + email +
                "<br> consulta: " + consulta

        console.log(nombre);
        console.log(telefono);
        console.log(email);
        console.log(consulta);
    Email.send({
            SecureToken : "24324616-766a-4b4b-88e1-f829464fb405",
            To : 'admin@enlacellc.com',
            From : "admin@enlacellc.com",
            Subject : "Consulta Enlace " + nombre,
            Body : body
        }).then(
          message => alert("Consulta enviada correctamente, estaremos en contacto")
        );
    console.log(body)

}


// const replaceText = (string) =>{
//     var target = document.getElementById("main");
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'new_content.txt', true);
//     xhr.onreadystatechange = function () {
//         if(xhr.readyState == 2){
//             target.innerHTML = 'Loading...';
//         }
//         if(xhr.readyState == 4 && xhr.status == 200){
            
//             target.innerHTML = xhr.responseText;
//         }
//     }

//     xhr.send();

// }
// var button = document.getElementById('ajax-button');
// button.addEventListener("click", replaceText);
