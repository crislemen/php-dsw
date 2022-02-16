function enviar() { 
    //Hacemos una variable para declarar los mensajes que nos dara si hemos hecho un login incorrecto
    var messages = document.querySelector(".messages");
    // Entramos en el formulario
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(res){     
        messages.innerHTML = "";     
    }    
    xhr.onload = function () {      
        if (xhr.status == 200) {
            let res = JSON.parse(this.responseText);  
            (res.access) ? messages.innerHTML = "login correcto" : messages.innerHTML = "login incorrecto";
        }
    }
    // abrimos el login php que es el que se encarga de validar el usuario 
    xhr.open('post', 'login.php', true);

    let form = document.querySelector("#formulario");     
    data = new FormData(form);    
         
    
    //POr ultimo envimos la respuesta que nos habrá dado el formulario
    xhr.send(data);

}