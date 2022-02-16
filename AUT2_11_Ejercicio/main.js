function traer() {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET','https://jsonplaceholder.typicode.com/users',true);

    xhttp.send();
    xhttp.onreadystatechange = function(){
        if (this.readyState ==4 && this.status == 200) {
            let datos = JSON.parse(this.responseText);
            let contenido = document.querySelector('#contenido');
            contenido.innerHTML = '';
            for(let item of datos){
                contenido.innerHTML += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.email}</td>
                    <td>${item.username}</td>
                </tr>
                `

            }
        }
    }
}
/**
 * Funcion con fetch para recoger valores de un JSON y devolverlo en una tabla
 */
function traer2() {
    let contenido = document.querySelector('#contenido');
    const promesa = fetch('https://jsonplaceholder.typicode.com/users',{
        method: 'GET'
    }).then(res => res.json())
    .then(datos => {
        tabla(datos)
    })
    function tabla(datos) {
        contenido.innerHTML=''
        for(valor of datos){
            contenido.innerHTML += `
                <tr>
                    <td>${valor.id}</td>
                    <td>${valor.name}</td>
                    <td>${valor.email}</td>
                    <td>${valor.username}</td>
                </tr>
                `
        }
    }
}