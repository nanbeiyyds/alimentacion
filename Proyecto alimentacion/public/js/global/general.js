/* ==========================================================================
   📦 COMPARTIDO: MODALES
   ========================================================================== */
function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.style.display = "flex";
        document.body.style.overflow = "hidden";
    }
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
}

// Cerrar modal haciendo click fuera
window.onclick = function(event) {
    if (event.target.className === "lab-modal") {
        event.target.style.display = "none";
        document.body.style.overflow = "auto";
    }
};

/* ==========================================================================
   📦 COMPARTIDO: TARJETAS FLIP
   ========================================================================== */
function activarTarjetas() {
    const tarjetas = document.querySelectorAll(".tarjeta");

    tarjetas.forEach(tarjeta => {
        tarjeta.addEventListener("click", () => {
            // Cerrar las demás
            tarjetas.forEach(t => {
                if (t !== tarjeta) {
                    t.classList.remove("flipped");
                }
            });
            // Girar actual
            tarjeta.classList.toggle("flipped");
        });
    });
}