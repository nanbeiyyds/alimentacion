$(window).on("load", inicio);

function inicio() {
    // Pestañas
    $(".pestannas").tabs({
        event: "click"
    });

    // Intro
    $("#infoIntro").fadeIn();

    // SVG Interactivo
    cargarSVG();

    // Simulador
    $("#botonFrescura").on("click", calcularFrescura);

    // Activar tarjetas (función alojada en comun.js)
    activarTarjetas();
}

/* ==========================================================================
   🥚 ESPECÍFICO: HUEVO (Funciones del simulador y SVG)
   ========================================================================== */

function cargarSVG() {
    const objetoSVG = document.getElementById("svg1");
    if (!objetoSVG) return;

    objetoSVG.addEventListener("load", function () {
        console.log("SVG cargado correctamente");
        const svgInterno = objetoSVG.contentDocument;

        if (!svgInterno) {
            console.error("No se pudo acceder al contenido del SVG.");
            return;
        }

        const partes = [
            ["#cascara", "#infoCascara"],
            ["#clara", "#infoClara"],
            ["#yema", "#infoYema"]
        ];

        partes.forEach(([idSVG, info]) => {
            const elementoSVG = $(svgInterno).find(idSVG);
            if (elementoSVG.length) {
                elementoSVG
                    .css("cursor", "pointer")
                    .on("click", function () {
                        ocultarTodo();
                        $("#infoIntro").hide();
                        $(info).fadeIn();
                    });
            }
        });
    });
}

function ocultarTodo() {
    $(".infoParte").hide();
}

function calcularFrescura(event) {
    event.preventDefault();
    let tipoFecha = $('input[name="tipoFecha"]:checked').val();
    let fechaStr = $("#fechaInput").val();

    if (!fechaStr) {
        $("#mensajeInicial").text("Por favor selecciona una fecha.");
        return;
    }

    $("#mensajeInicial").hide();
    let fecha = new Date(fechaStr);
    let fechaActual = new Date();

    if (tipoFecha == "fcp") {
        fecha.setDate(fecha.getDate() - 28);
    }

    let diferenciaFechas = fechaActual - fecha;
    let diasPasados = Math.floor(diferenciaFechas / (1000 * 60 * 60 * 24));

    let phClara = estimarPHClara(diasPasados);
    let phYema = estimarPHYema(diasPasados);

    mostrarResultados(diasPasados, phClara, phYema);
}

function mostrarResultados(diasPasados, phClara, phYema) {
    $("#resultadoSimulador").removeClass("estadoInicial").addClass("estadoFinal");
    $("#mensajeResultado").html("&#x1f5d3;&#xfe0f; Días desde la puesta: " + diasPasados);
    $("#phBarras").show();

    $("#barraClara").css("width", `${(phClara - 7.5) * 40}%`);
    $("#phClaraTexto").text(" " + phClara);

    $("#barraYema").css("width", `${(phYema - 6.0) * 100}%`);
    $("#phYemaTexto").text(" " + phYema);

    let estadoHuevo = determinarEstado(phClara, phYema);
    $("#imagenSimulador").attr("src", `/img/huevo/huevo_${estadoHuevo.replace(" ", "_")}.png`);
    mostrarEstadoHuevo(estadoHuevo);
}

function mostrarEstadoHuevo(estadoHuevo) {
    let mensaje = "";
    switch (estadoHuevo) {
        case "muy fresco": mensaje = "&#x1f7e2 Muy Fresco"; break;
        case "aun fresco": mensaje = "&#x1f7e1 Aún Fresco"; break;
        case "poco fresco": mensaje = "&#x1f7e1 Poco Fresco"; break;
        default: mensaje = "&#x1f7e0 No Fresco";
    }
    $("#mensajeEstadoHuevo").html(mensaje);
}

function estimarPHClara(dias) { return Math.min((7.6 + dias * 0.1).toFixed(1), 9.5); }
function estimarPHYema(dias) { return Math.min((6.0 + dias * 0.02).toFixed(1), 6.6); }

function determinarEstado(phClara, phYema) {
    if (phClara < 8.0 && phYema < 6.2) return "muy fresco";
    if (phClara < 8.5 && phYema < 6.4) return "aun fresco";
    if (phClara < 9.0 && phYema < 6.5) return "poco fresco";
    return "no fresco";
}