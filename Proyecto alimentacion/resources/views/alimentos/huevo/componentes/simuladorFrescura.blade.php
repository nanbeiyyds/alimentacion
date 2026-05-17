
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Simulador de frescura</h3>
        </div>

        <div id="contenSimulador">

            <!-- FORMULARIO -->
            <div id="formuSimulador">
                <p>Selecciona el tipo de fecha:</p>

                <label>
                    <input type="radio" name="tipoFecha" value="puesta" checked>
                    Fecha de puesta
                </label>

                <label>
                    <input type="radio" name="tipoFecha" value="fcp">
                    Fecha de consumo preferente
                </label>

                <p>Fecha:</p>

                <label>
                    🗓️
                    <input type="date" id="fechaInput">
                </label>

                <button id="botonFrescura">Calcular frescura</button>
            </div>

            <!-- RESULTADO -->
            <div id="resultadoSimulador" class="estadoInicial">

                <h2>Resultado</h2>

                <div id="mensajeInicial">
                    <p>
                        Introduce una fecha y pulsa <strong>“Calcular frescura”</strong>
                    </p>
                </div>

                <div class="contenResultadoContenido">

                    <div class="contenImagenSimulador">
                        <img id="imagenSimulador" src="" alt="">
                    </div>

                    <div class="datosSimulador">

                        <p id="mensajeResultado"></p>

                        <div id="phBarras">

                            <p>🧪 pH Clara: <span id="phClaraTexto">-</span></p>
                            <div class="barrasFondo"><div id="barraClara"></div></div>

                            <p>🧪 pH Yema: <span id="phYemaTexto">-</span></p>
                            <div class="barrasFondo"><div id="barraYema"></div></div>

                        </div>

                        <strong><p id="mensajeEstadoHuevo"></p></strong>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>