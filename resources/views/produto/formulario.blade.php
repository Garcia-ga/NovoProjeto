@extends('layout.principal')
@section('conteudo')

<h1>Novo Produto</h1>

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" />
    </div>

    <div class="form-group">
    <label for="">Descrição</label>
    <input type="text" name="descricao" class="form-control" value="{{ old('descricao') }}" />
    </div>

    <div class="form-group">
    <label for="">Valor</label>
    <input type="text" name="valor" class="form-control" value="{{ old('valor') }}" />
    </div>

    <div class="form-group">
    <label for="">Quantidade</label>
    <input type="number"  name="quantidade" class="form-control" value="{{ old('quantidade') }}">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Adiciona</button>
</form>

@stop