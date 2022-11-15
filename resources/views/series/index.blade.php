<x-layout title="Séries">
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
	<a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
	</div>

	<ul  class="list-group">
		@foreach ($series as $serie)
			<li class="list-group-item"> {{$serie}}</li>
		@endforeach
	</ul>
	
</x-layout>
