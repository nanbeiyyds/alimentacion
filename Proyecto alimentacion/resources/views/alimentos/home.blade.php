@extends('layouts.plantilla')

@section('title', 'Inicio')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
<section>
	<article>
		<div>
			<div class="bannerInicio">
				<div class="doodleInicio">
					<div class="imagenInicio"></div>
				</div>
				<div class="tituloInicio">
					<p>Web de <span>Alimentación</span></p>
				</div>
			</div>
			<div class="promocionIncio">

			</div>
			<div id="contetTitiProduc">
				<h2 id="tituloProduc">ALIMENTOS</h2>
			</div>
			
			<div class="cajasProductos">
				<a href="{{ route('alimento.show', 'aceite') }}">
					<img src="{{ asset('img/aceite/aceite.png') }}" alt="Aceite">
					<div class="producto" id="productoAceite">
						<p class="nombre">ACEITES Y GRASAS</p>
						<p class="flecha">→</p>
					</div>
				</a>
				<a href="{{ route('alimento.show', 'carne') }}">
					<img src="{{ asset('img/carne/carne.png') }}" alt="Carne">
					<div class="producto" id="productoCarne">
						<p class="nombre">CARNES</p>
						<p class="flecha">→</p>
					</div>
				</a>
				<a href="{{ route('alimento.show', 'harina') }}">
					<img src="{{ asset('img/harina/harina.png') }}" alt="Harina">
					<div class="producto" id="productoHarina">
						<p class="nombre">HARINA</p>
						<p class="flecha">→</p>
					</div>
				</a>
				<a href="{{ route('alimento.show', 'huevo') }}">
					<img src="{{ asset('img/huevo/huevos.png') }}" alt="Huevos">
					<div class="producto" id="productoHuevos">
						<p class="nombre">HUEVOS</p>
						<p class="flecha">→</p>
					</div>
				</a>
				<a href="{{ route('alimento.show', 'leche') }}">
					<img src="{{ asset('img/leche/leche.png') }}" alt="Leche">
					<div class="producto" id="productoLeche">
						<p class="nombre">LECHE Y DERIVADOS</p>
						<p class="flecha">→</p>
					</div>
				</a>
				
				<a href="{{ route('alimento.show', 'pescado') }}">
					<img src="{{ asset('img/pescado/pescado.png') }}" alt="Pescado">
					<div class="producto" id="productoPescado">
						<p class="nombre">Pescado</p>
						<p class="flecha">→</p>
					</div>
				</a>
			</div>
		</div> 
	</article>
</section>
@endsection