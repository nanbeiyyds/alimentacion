$(window).on("load",inicio);

// Cuando son archivos separados, funtion se dispara antes de que el elemento esté listo para dar su contenido
// para evitar, usar ready
$(document).ready(function(){
    inicio();
});

function inicio(){
    /* $("#pestannas").tabs({ event:"click" }); -> Pertenece a jQuery UI (biblioteca de componentes que se instala encima de jQuery)
    $("#pestannas") -> Busca elemento con dicho id y lo transforma automáticamente
    event -> Es el disparador. Le dice a jQuery UI que el cambio de pestaña debe ocurrir cuando el ususario haga clic en elementos con dicho id
    Puedes hacer prueba con event: "mouseover", es más explícito
    */
    $("#pestannas").tabs({ event:"click" });

    // Objetener elemento svg por id
    const objetoSVG = document.getElementById('svg1');

    if (objetoSVG) {
        // Esperar que cargue el archivo
        objetoSVG.addEventListener("load", function() {
            console.log("SVG cargado correctamente");  //Si no ves esto, el evento load falló
            const svgInterno = objetoSVG.contentDocument;

            if (!svgInterno) {
                console.error("No se pudo acceder al contenido del SVG.");
                return;
            } else {
                console.log("Sí se pudo acceder al contenido SVG");
            }

            const partes = [ // id; idInfo
                ['#cascara', '#infoCascara'],
                ['#clara', '#infoClara'],
                ['#yema', '#infoYema']
            ];

            // Iterar
            partes.forEach(element => {
                const idSVG = element[0];
                const info = element[1];

                // Buscamos tal elemento y cuardas tantas veces haya
                const id_element = $(svgInterno).find(idSVG);

                // Aviso capa encotnrado
                console.log("Capa " + idSVG + " encontrada:", id_element.length);

                if (id_element.length) { // Si no está vacío
                    id_element.css('cursor', 'pointer').on('click', function() {
                        console.log("Click en " + idSVG + " detectado");
                        ocultarTodo();
                        $(info).fadeIn();
                    });
                } else {
                    console.warn("No se encontró el ID " + idSVG + " dentro del SVG");
                }
            });
        });
    }

    $("#botonFrescura").on("click", calcularFrescura);
}

function ocultarTodo() {
    $('.infoParte').hide();
}

function calcularFrescura(event){
    event.preventDefault();

    let tipoFecha = $('input[name="tipoFecha"]:checked').val(); ;
    let fechaStr = $('#fechaInput').val();

    if (fechaStr) {
        $('#mensajeInicial').hide();
        let fecha = new Date(fechaStr);
        let fechaActual = new Date();

        if(tipoFecha == "fcp"){
        fecha.setDate(fecha.getDate() - 28);
        }

        let diferenciaFechas = fechaActual - fecha;
        let diasPasados = Math.floor(diferenciaFechas / (1000 * 60 * 60 * 24));

        let phClara = estimarPHClara(diasPasados);
        let phYema = estimarPHYema(diasPasados);


        $('#resultadoSimulador').removeClass('estadoInicial').addClass('estadoFinal');
        $('#mensajeResultado').html('&#x1f5d3;&#xfe0f; Días desde la puesta: '+diasPasados);

        $('#phBarras').show();
        $('#barraClara').css('width', `${(phClara - 7.5) * 40}%`);
        $('#phClaraTexto').text(" "+phClara);
        $('#barraYema').css('width', `${(phYema - 6.0) * 100}%`);
        $('#phYemaTexto').text(" "+phYema);

        let estadoHuevo = determinarEstado(phClara, phYema);

        $('#imagenSimulador').attr('src', `../img/huevo_${estadoHuevo.replace(' ', '_')}.png`);

        if(estadoHuevo == 'muy fresco'){
            $('#mensajeEstadoHuevo').html('&#x1f7e2 Muy Fresco');
        }else if (estadoHuevo == 'aun fresco'){
            $('#mensajeEstadoHuevo').html('&#x1f7e1 Aún Fresco');
        }else if(estadoHuevo == 'poco fresco'){
            $('#mensajeEstadoHuevo').html('&#x1f7e1 Poco Fresco');
        }else{
            $('#mensajeEstadoHuevo').html('&#x1f7e0 No Fresco');
        }

    } else {
        $('#mensajeInicial').text('Por favor selecciona una fecha.');
    }
}


function estimarPHClara(dias) {
    return Math.min((7.6 + dias * 0.1).toFixed(1), 9.5);
}

function estimarPHYema(dias) {
    return Math.min((6.0 + dias * 0.02).toFixed(1), 6.6);
}

function determinarEstado(phClara, phYema) {
    if (phClara < 8.0 && phYema < 6.2) {
        return 'muy fresco';
    } else if (phClara < 8.5 && phYema < 6.4) {
        return 'aun fresco';
    } else if (phClara < 9.0 && phYema < 6.5) {
        return 'poco fresco';
    } else {
        return 'no fresco';
    }
}

// Espera a que se cargue
document.addEventListener('DOMContentLoaded', () => {
    // Busca todos los elementos con clase .tarjeta
    // Devuelve una lista (NodeList), como un array
    const tarjetas = document.querySelectorAll('.tarjeta');

    // Recorre cada tarjeta
    tarjetas.forEach(tarjeta => {
        // Cuando haga click en ESTA tarheta
        tarjeta.addEventListener('click', () => {

            // Recorremos todas
            tarjetas.forEach(t => {
                // Si esas tarjetas no le hiciste clic, quitar .flipped
                if (t !== tarjeta) t.classList.remove('flipped');
            });

            // Y giramos la tarjeta correcta
            tarjeta.classList.toggle('flipped');
        });
    });
});