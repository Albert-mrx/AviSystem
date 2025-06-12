const btnsave = document.getElementById("btnsave");
btnsave.addEventListener("click", agregarEvento);

function agregarEvento(e) {
    e.preventDefault();
    let evento = new FormData();
    evento.append("id", document.getElementById("id").value);
    evento.append("title", document.getElementById("titulo").value);
    evento.append("fecha", document.getElementById("fecha").value);
    evento.append("hora", document.getElementById("hora").value);
    
    evento.append("descripcion", document.getElementById("descripcion").value);
    evento.append("color", document.getElementById("color").value);

    for (let valor of evento.values()) {
        console.log(valor);
    }

    fetch("api.php?accion=agregar", {
        method: "POST",
        body: evento
    })
    .then(data => {
        console.log("Evento agregado:", data);
        // Mostrar alerta de éxito
        Swal.fire({
            icon: 'success',
            title: 'Evento creado correctamente',
            showConfirmButton: true,
            confirmButtonText: 'OK',
            timer: 3000
        }).then(() => {
            // Cerrar el modal
            document.getElementById("authentication-modal").classList.add("hidden");

            // Limpiar formulario
            limpiarFormulario("");
            location.reload();
        });
    })
    .catch(error => {
        console.error("Error al agregar el evento:", error);
    });
}

function limpiarFormulario(fecha) {
    document.getElementById("id").value = "";
    document.getElementById("titulo").value = "";
    document.getElementById("fecha").value = fecha;
    document.getElementById("hora").value = "";
    
    document.getElementById("descripcion").value = "";
    document.getElementById("color").value = "#404040";
}

