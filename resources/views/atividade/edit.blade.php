<h1>Formulário de edição de Atividades {{ $atividade->id }} </h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título:         <input type="text" name="title" value="{{$atividade->title}}"> <br>
	Descrição: 		<input type="text" name="description" value="{{$atividade->description}}"><br>
	Agendado para:	<input type="datetime-local" name="scheduledto" value="{{Carbon\Carbon::parse($atividade->scheduledto)->format('Y-m-d\TH:i:s')}}"><br>
	<input type="submit" value="Salvar">
</form>


@if($errors->any()))
	<div class="container">
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			</ul>
		</div>
	</div>
@endif

@if(\Session::has('success'))
<div class="container">
		<div class="alert alert-success">
			{{\Session::get('success')}}
		</div>
	</div>
@endif


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->