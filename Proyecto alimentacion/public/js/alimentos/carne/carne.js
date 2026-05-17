$(window).on("load", inicio);

function inicio() {
    // Inicializar pestañas de la leche
    $(".pestannas").tabs({
        event: "click"
    });

    // Activar tarjetas (función alojada en comun.js)
    activarTarjetas();
}