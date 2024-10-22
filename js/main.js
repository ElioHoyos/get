document.getElementById('miFormulario').onsubmit = function(event){
    let valid = true;
    //limpiar mensajes de error
    document.getElementById('errorNombre').textContent = '';
    document.getElementById('errorEmail').textContent = '';

    //validación del nombre
    const nombre = document.getElementById('nombre').value;
    if(nombre.length < 3){
        document.getElementById('errorNombre').textContent = 'El nombre deber tener más de 3 caracteres';
        valid = false;
    }

    //validar si es vacio no enviar datos
    if(!valid){
        event.preventDefault();
    }

}