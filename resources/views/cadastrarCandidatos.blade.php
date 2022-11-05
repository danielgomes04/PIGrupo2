@extends('padrao')
@section('content')

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Adoção</title>
</head>
<body>

</body>
</html>

<section class="cadastrarCandidatos">

<div class="text-center">
  <h1>Tela de Cadastro</h1>
</div>

<div class="container cadastroBones">
<form class="row g-3" method="post" action="{{route('salvar-banco-candidatos')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Nome</label>
    <input type="text" name="nome" value="{{old('nome')}}" class="form-control" id="inputModelo" placeholder="Insira seu nome">

    @error('nome')
    <div class="fw-bolder">*Preencher o campo nome </div>
    @enderror('nome') 
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Seu e-mail</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control" id="inputMarca" placeholder="Insira seu e-mail">
    @error('email')
    <div class="fw-bolder">*Preencher o campo e-mail. </div>
    @enderror('email')  
  </div>
  <div class="col-12">
    <label for="inputMarca" class="form-label">Data de Nascimento</label>
    <input type="text" name="DataDeNascimento" value="{{old('DataDeNascimento')}}" class="form-control" id="inputMarca" placeholder="DD/MM/AAAA">
    @error('DataDeNascimento')
    <div class="fw-bolder">*Preencher o campo Data de Nascimento. </div>
    @enderror('DataDeNascimento')  
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Telefone</label>
    <input type="text" name="telefone" value="{{old('telefone')}}" class="form-control" id="inputAno" placeholder="Telefone">
    @error('telefone')
    <div class="fw-bolder">*Preencher o campo Telefone. </div>
    @enderror('telefone')  
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>

</section>

@endsection



