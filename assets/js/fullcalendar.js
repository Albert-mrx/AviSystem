document.addEventListener('DOMContentLoaded', function () {
    let modalEvento = document.getElementById('authentication-modal');
    let modalContent = modalEvento.querySelector(".modal-content");

    const mostrarModal = () => {
        modalEvento.classList.remove("hidden");
        modalEvento.classList.add("flex");
        setTimeout(() => {
            modalContent.classList.remove("opacity-0", "scale-95");
            modalContent.classList.add("opacity-100", "scale-100");
        }, 10);
    };

    const cerrarModal = () => {
        modalContent.classList.remove("opacity-100", "scale-100");
        modalContent.classList.add("opacity-0", "scale-95");

        setTimeout(() => {
            modalEvento.classList.add("hidden");
            modalEvento.classList.remove("flex");
        }, 200);
    };

    // Inicializar FullCalendar
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "es",
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth',
        },
        dateClick: function (info) {
            limpiarFormulario(info.dateStr);
            mostrarModal();
        },
        events: "api.php"
    });
    calendar.render();

    // Botón cerrar (X)
    const closeButtons = document.querySelectorAll("[data-modal-hide]");
    closeButtons.forEach(button => {
        button.addEventListener("click", cerrarModal);
    });

    // Cerrar al hacer clic en el fondo oscuro
    modalEvento.addEventListener("click", function (event) {
        if (event.target === modalEvento) {
            cerrarModal();
        }
    });
});
