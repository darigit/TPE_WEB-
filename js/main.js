'use strict';

let btn_comentario = document.querySelector('#btnComentario');


let templateComentario;
let URL1 = window.location.href;

fetch('../js/templates/listadoComentario.handlebars').then(response => response.text()).then(template => {
    templateComentario = Handlebars.compile(template);    
});

   
btn_comentario.addEventListener('click', c=>{
        let el_libro = btn_comentario.getAttribute("name");
        getComentario(el_libro);
});




function getComentario(el_libro) {
    
    fetch("../api/comentario/" + el_libro)
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                console.log(response.json());
            }
        }).then(jsonComentario => {
            console.log(jsonComentario);

            let context = {
                comentario: jsonComentario
            };

            let html = templateComentario(context);
            document.querySelector('#los_comentarios').innerHTML = html;
            let btn_su_comentario = document.querySelector('#btnSuComentario');
            btn_su_comentario.addEventListener('click', s=>{
                let el_libro = btn_comentario.getAttribute("name");                
                addComentario(el_libro);
            });
        });
}

function addComentario(el_libro) {
    
    let elComentario = document.querySelector("#su_comentario").value;
    let elPuntaje = document.querySelector("#su_puntaje").value;
    let div = document.querySelector("#div_contenedor");
    let data = {
        'descripcion' : elComentario,
        'puntaje' : elPuntaje,
        'fk_libro' : el_libro,
        'nombre_post' : 'jorge',        
    }

    fetch("../api/comentario/", {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json"
        },
        "body": JSON.stringify(data)
      })
      .then(response => {
        if (response.ok) {
            response.json().then(r => {
                getComentario(el_libro);
                div.innerHTML = `<div class="alert alert-success mt-2" role="alert">Se ha guardado con exito</div>`;
                console.log(r);
                
            });
        } else {
            div.innerHTML = `<div class="alert alert-danger mt-2" role="alert">Error Inesperado al guardar Legajo</div>`;
            console.log("ERROR");
        }
      })
      .catch(e => console.log(e));
}