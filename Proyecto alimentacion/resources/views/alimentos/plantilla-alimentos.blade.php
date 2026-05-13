@extends('layouts.plantilla')

@section('title', ucfirst($alimento))

@push('styles')
	<!-- CSS global -->
	<link rel="stylesheet" href="{{ asset('css/alimentos/curiosidades.css') }}" type="text/css" /> <!-- Por el estilo de las tarjetas de curiosidades -->
	<link rel="stylesheet" href="{{ asset('css/alimentos/pestannas-menu.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/alimentos/general.css') }}" type="text/css" />

    @foreach ($data['css'] as $i)
        <link rel="stylesheet" href="{{ asset('css/alimentos/' . $alimento . '/' . $i) }}">
    @endforeach
@endpush

@section('content')
    <section>
		<article>
			@include($data['intro'])
		</article>
		<article class="general">
			<div id="pestannas">
				<!-- Recordar conectarlo a base de datos --> 
				@include('componentes.pestannas-menu', [
					'items' => $menu
				])

				<!-- Contenido de cada sección -->
				@foreach ($data['secciones'] as $i)
					<div id="{{ $i['id'] }}">
						<h2>{{ $i['titulo'] }}</h2>
						@include($i['vista'])
					</div>
				@endforeach
			</div>
		</article>
	</section>
@endsection

@push('scripts')
    @foreach ($data['js'] as $i)
        @if ($i['type'] === 'local')
			<script src="{{ asset('js/alimentos/' . $alimento . '/' . $i['path']) }}"></script>
        @elseif ($i['type'] === 'non-local')
			<script src="{{ $i['path'] }}"></script>
        @endif
    @endforeach
@endpush