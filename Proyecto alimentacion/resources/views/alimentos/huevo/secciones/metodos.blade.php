<!-- INTRODUCCIÓN -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Introducción</h3>
        </div>

        <p class="analysis-intro">
            Los métodos analíticos aplicados al huevo permiten evaluar su frescura,
            calidad microbiológica, composición nutricional y seguridad alimentaria.
            Estas técnicas físicas, químicas y microbiológicas son esenciales para
            garantizar un producto apto para el consumo humano.
        </p>
    </div>
</div>

<!-- PARÁMETROS ANALÍTICOS -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Parámetros analíticos del huevo</h3>
        </div>

        <div class="analysis-dashboard">

            <div class="dashboard-item">
                <i class="fas fa-vial"></i>
                <div class="item-text">
                    <span class="item-title">pH</span>
                    <small>Evalúa la frescura del huevo</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-weight-scale"></i>
                <div class="item-text">
                    <span class="item-title">Densidad</span>
                    <small>Permite determinar la frescura</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-microscope"></i>
                <div class="item-text">
                    <span class="item-title">Carga microbiológica</span>
                    <small>Detecta contaminación bacteriana</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-egg"></i>
                <div class="item-text">
                    <span class="item-title">Calidad de la cáscara</span>
                    <small>Evalúa resistencia y composición</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-ruler-vertical"></i>
                <div class="item-text">
                    <span class="item-title">Unidad Haugh</span>
                    <small>Mide la calidad interna del huevo</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-water"></i>
                <div class="item-text">
                    <span class="item-title">Cámara de aire</span>
                    <small>Indica envejecimiento del huevo</small>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- DETALLES -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Detalles</h3>
        </div>

        <div class="physic-chem-grid">

            <!-- pH -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>pH</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        El pH permite evaluar la frescura del huevo. Con el paso del
                        tiempo la clara pierde dióxido de carbono y se vuelve más alcalina.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/pH.png') }}" alt="pH">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-01')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <!-- DENSIDAD -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Densidad</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        Los huevos frescos presentan mayor densidad y se hunden en agua,
                        mientras que los huevos envejecidos flotan debido al aumento de
                        la cámara de aire.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/densidad.png') }}" alt="Densidad">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-02')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <!-- MICROBIOLOGÍA -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Carga microbiológica</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        Permite detectar microorganismos patógenos como Salmonella,
                        garantizando la inocuidad y seguridad alimentaria.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/micro.png') }}" alt="Microbiología">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-03')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <!-- CÁSCARA -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Calidad de la cáscara</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        Analiza el grosor, resistencia y composición mineral de la
                        cáscara para evaluar la protección del contenido interno.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/cascara.png') }}" alt="Cáscara">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-04')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <!-- Haugh -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">05</span>
                    <h4>Unidad Haugh</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        Sistema utilizado para medir la calidad interna del huevo
                        mediante la altura de la clara y el peso total.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/haugh.png') }}" alt="Unidad Haugh">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-05')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <!-- CÁMARA DE AIRE -->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">06</span>
                    <h4>Cámara de aire</h4>
                </div>

                <div class="lab-card-body">
                    <p>
                        A medida que el huevo envejece pierde humedad y aumenta el
                        tamaño de la cámara de aire interna.
                    </p>

                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/huevo/camara_aire.png') }}" alt="Cámara de aire">
                    </div>
                </div>

                <div class="lab-card-footer detail-btn" onclick="openModal('modal-06')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- MODAL 01 -->
<div id="modal-01" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-01')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">01</span>
            <h2>Determinación del pH</h2>
        </div>

        <div class="modal-body">

            <div class="info-tag">
                <strong>Instrumentos:</strong> pH-metro y electrodo.
            </div>

            <p>
                El pH aumenta progresivamente debido a la pérdida de CO₂
                durante el almacenamiento.
            </p>

            <table class="modal-table">
                <tr>
                    <th>Valor</th>
                    <th>Interpretación</th>
                </tr>

                <tr>
                    <td>7.6 - 8.0</td>
                    <td>Huevo fresco</td>
                </tr>

                <tr>
                    <td>8.1 - 8.7</td>
                    <td>Huevo almacenado</td>
                </tr>

                <tr>
                    <td>&gt; 8.8</td>
                    <td>Huevo envejecido</td>
                </tr>
            </table>

        </div>
    </div>
</div>

<!-- MODAL 02 -->
<div id="modal-02" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-02')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Determinación de densidad</h2>
        </div>

        <div class="modal-body">

            <div class="info-tag">
                <strong>Método:</strong> prueba de flotación.
            </div>

            <p>
                Los huevos frescos se hunden debido a su menor cámara de aire,
                mientras que los huevos viejos flotan.
            </p>

        </div>
    </div>
</div>

<!-- MODAL 03 -->
<div id="modal-03" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-03')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Análisis microbiológico</h2>
        </div>

        <div class="modal-body">

            <div class="info-tag">
                <strong>Microorganismos:</strong> Salmonella spp. y coliformes.
            </div>

            <p>
                Permite garantizar la inocuidad alimentaria y prevenir
                enfermedades transmitidas por alimentos.
            </p>

        </div>
    </div>
</div>

<!-- MODAL 04 -->
<div id="modal-04" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-04')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Calidad de la cáscara</h2>
        </div>

        <div class="modal-body">

            <div class="info-tag">
                <strong>Evaluación:</strong> grosor, porosidad y resistencia.
            </div>

            <p>
                Una cáscara resistente protege el contenido interno frente a
                contaminación y pérdidas de humedad.
            </p>

        </div>
    </div>
</div>

<!-- MODAL 05 -->
<div id="modal-05" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-05')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">05</span>
            <h2>Unidad Haugh</h2>
        </div>

        <div class="modal-body">

            <p>
                Evalúa la calidad interna del huevo utilizando la altura
                de la clara espesa y el peso del huevo.
            </p>

        </div>
    </div>
</div>

<!-- MODAL 06 -->
<div id="modal-06" class="lab-modal">
    <div class="modal-content">

        <span class="close-btn" onclick="closeModal('modal-06')">&times;</span>

        <div class="modal-header">
            <span class="lab-number">06</span>
            <h2>Cámara de aire</h2>
        </div>

        <div class="modal-body">

            <p>
                La cámara de aire aumenta con el tiempo debido a la pérdida
                de agua y gases a través de la cáscara.
            </p>

        </div>
    </div>
</div>

<!-- SIMULADOR -->
@include('alimentos.huevo.componentes.simuladorFrescura')