function mostrarMensaje(mensaje, event) {
            const mensajeEmergente = event.target.nextElementSibling;
            mensajeEmergente.textContent = mensaje;
            mensajeEmergente.style.display = 'block';
            mensajeEmergente.style.top = event.target.offsetTop + 'px'; // Alinea con el campo
            mensajeEmergente.style.left = (event.target.offsetLeft + event.target.offsetWidth + 10) + 'px'; // Justo al lado
        }

        function ocultarMensaje() {
            const mensajes = document.querySelectorAll('#mensajeEmergente');
            mensajes.forEach(mensaje => {
                mensaje.style.display = 'none';
            });
        }
