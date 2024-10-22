document.getElementById('miFormulario').onsubmit = function(event) {
    let valid = true;

    // Limpiar mensajes de error
    document.getElementById('errorNombre').textContent = '';
    document.getElementById('errorEmail').textContent = '';

    // Validación del nombre
    const nombre = document.getElementById('nombre').value;
    if (nombre.length < 3) {
        document.getElementById('errorNombre').textContent = 'El nombre debe tener al menos 3 caracteres.';
        valid = false;
    }

    // Validación del email
    const email = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById('errorEmail').textContent = 'Por favor, ingresa un email válido.';
        valid = false;
    }

    // Si no es válido, evitar el envío del formulario
    if (!valid) {
        event.preventDefault();
    }
};