<div id="simulador"> <!-- Simulador frescura -->
	<div id="contenTituloSimu">
		<h2 class="tituloSimu">SIMULADOR DE FRESCURA</h2>
	</div>
	<div id="contenSimulador">
		<div id="formuSimulador">
			<p>Selecciona el tipo de fecha:</p>
			<label>
				<input type="radio" name="tipoFecha" value="puesta" checked>
				Fecha de puesta
			</label><br>
			<label>
				<input type="radio" name="tipoFecha" value="fcp">
				Fecha de consumo preferente
			</label><br><br>
				<p>Fecha:</p>
			<label>&#x1f5d3;&#xfe0f;
				<input type="date" id="fechaInput">
			</label><br><br>
			<button id="botonFrescura">Calcular frescura</button>
		</div>
		<div id="resultadoSimulador" class="estadoInicial">
			<h2>Resultado</h2>
			<div id="mensajeInicial">
				<p>Introduce una fecha y pulsa <strong>“Calcular frescura”</strong> para saber si tu huevo está fresco.</p>
			</div>
			<div class="contenResultadoContenido">
				<div class="contenImagenSimulador">
					<img src="" alt="" id="imagenSimulador">
				</div>
				<div class="datosSimulador">
					<p id="mensajeResultado"></p>
					<div id="phBarras">
						<p>&#x1f9ea pH Clara:<span id="phClaraTexto">-</span></p>
						<div class="barrasFondo"><div id="barraClara"></div></div>
						<p>&#x1f9ea pH Yema: <span id="phYemaTexto">-</span></p>
						<div class="barrasFondo"><div id="barraYema"></div></div>
					</div>
					<p id="mensajeEstadoHuevo"></p>
				</div>
			</div>
		</div>
	</div>
</div> <!-- FIN Simulador frescura -->