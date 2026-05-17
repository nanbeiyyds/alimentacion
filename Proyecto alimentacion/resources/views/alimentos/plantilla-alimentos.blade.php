@extends('layouts.plantilla')

@section('title', ucfirst($alimento))

@push('styles')
	<!-- CSS global -->
	<link rel="stylesheet" href="{{ asset('css/global/pestannas-menu.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/global/banner.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/global/general.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/pestannas/valor-nutricional.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/pestannas/ingesta.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/pestannas/raciones.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/pestannas/patologia.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/pestannas/metodo.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/pestannas/curiosidades.css') }}" type="text/css" /> <!-- Por el estilo de las tarjetas de curiosidades -->

	<!-- CSS personales -->
    @foreach ($data['css'] as $i)
        <link rel="stylesheet" href="{{ asset('css/alimentos/' . $alimento . '/' . $i) }}">
    @endforeach
@endpush

@section('content')
    <section>
		<article>
			@include($data['intro'])
		</article>
		<article>
			<div class="pestannas">
				@include('componentes.pestannas-menu', [
					'items' => $menu
				])

				<!-- Contenido de cada sección -->
				@foreach ($data['secciones'] as $i)
					<section id="{{ $i['id'] }}">
						<h2 class="tituloAlimento">{{ $i['titulo'] }}</h2>
						@include($i['vista'])
					</section>
				@endforeach
			</div>
		</article>
	</section>
@endsection

@push('scripts')

	<!-- CSS global -->
	<script src="{{ asset('js/global/general.js') }}"></script>

	<!-- CSS personales -->
    @foreach ($data['js'] as $i)
        @if ($i['type'] === 'local')
			<script src="{{ asset('js/alimentos/' . $alimento . '/' . $i['path']) }}"></script>
        @elseif ($i['type'] === 'non-local')
			<script src="{{ $i['path'] }}"></script>
        @endif
    @endforeach
@endpush