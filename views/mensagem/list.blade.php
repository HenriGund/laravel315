<h1>Lista de Mensagens<h1>
<hr>
@if ($errors->any())
<div class="container">
  <div class="alert alert-danger">
	<ul>
	  @foreach ($errors->all() as $error)
	  <li>{{ $error }}</li>
	  @endforeach
	</ul>
  </div>
</div>
@endif

@foreach($mensagem as $m)
    <p><a href="/mensagem/{{$m->id}}">{{$m->titulo}}</a></p>
    <p>{{$mensagem->titulo}}</p>
    <p>{{$mensagem->autor}}</p>
    <p>{{$mensagem->mensagem}}</p>
    <br>
@endforeach

@if(\Session::has('sucess'))
	<div class="container">
		<div class="alert alert-sucess">
			{{\Session::get('sucess')}}
		</div>
	</div>
@endif