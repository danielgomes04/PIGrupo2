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

<div class="container cadastroCandidatos">
<form class="row g-3" method="post" action="{{route('salvar-banco-candidatos')}}">
  @csrf

  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" value="{{old('nome')}}" class="form-control" id="inputNome" placeholder="Nome">
    @error('nome')
    <div class="fw-bolder">*Preencher o campo nome.</div>
    @enderror('nome') 
  </div>
  
  <div class="col-12">
    <label for="inputE-mail" class="form-label">E-mail</label>
    <input type="text" name="e-mail" value="{{old('e-mail')}}" class="form-control" id="inputE-mail" placeholder="E-mail">
    @error('email')
    <div class="fw-bolder">*Preencher o campo e-mail. </div>
    @enderror('email')  
  </div>

  <div class="col-12">
    <label for="inputDataDeNascimento" class="form-label">Data de Nascimento</label>
    <input type="text" name="DataDeNascimento" value="{{old('DataDeNascimento')}}" class="form-control" id="inputDataDeNascimento" placeholder="DD/MM/AAAA">
    @error('DataDeNascimento')
    <div class="fw-bolder">*Preencher o campo Data de Nascimento. </div>
    @enderror('DataDeNascimento')  
  </div>
  
  <div class="col-12">
    <label for="inputTelefone" class="form-label">Telefone</label>
    <input type="text" name="Telefone" value="{{old('Telefone')}}" class="form-control" id="inputTelefone" placeholder="(00)000000-0000">
    @error('Telefone')
    <div class="fw-bolder">*Preencher o campo Telefone. </div>
    @enderror('Telefone')  
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>

</section>

@endsection



