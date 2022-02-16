function enviar() { 
    
    var loader = document.querySelector(".inner-loader");
    var messages = document.querySelector(".messages");

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(res){     
        messages.innerHTML = "";     
        (xhr.readyState < 4) ? loader.style.display = "block" : loader.style.display = "none";
    }    
    xhr.onload = function () {      
        if (xhr.status == 200) {
            let res = JSON.parse(this.responseText);
            //console.log(res);     
            (res.access) ? messages.innerHTML = "login correcto" : messages.innerHTML = "login incorrecto";
        }
    }
    xhr.open('post', '../inc/login.php', true);

    // prepare FormData()
    let form = document.querySelector("#login_form");     
    data = new FormData(form);    
    //data.append('origin', "login"); // campo adiccional     
    
    // Send Request
    xhr.send(data);

}