<h1>Lista de Atividades</h1>
<hr>

@if(\Session::has('success'))
	<div class="container">
		<div class="alert alert-success">
			{{\Session::get('success')}}
		</div>
	</div>
@endif

@foreach($atividades as $a)
	<h3>{{$a->scheduledto}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->