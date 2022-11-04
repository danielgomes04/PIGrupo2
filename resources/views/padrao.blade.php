<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Site de Adoção</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
     
    
    <header>
    <nav class="navbar navbar-dark bg-dark">

<div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{}}"/></a>
    <button class="navbar-toggler" t
    pe="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Jogador

          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="editar-jogador">Buscar</a></li>
            <li><a class="dropdown-item" href="cadastrar-jogador">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="editar-jogador">Gerenciar</a></li>
          </ul>
        </li>
       
    
      
      
    </div>
    
  </div>
</nav>
</header>


@yield('content')

<footer > 
        <div class="text-center">
            <nav> 
                <h2>Fique conectado !</h2>
                <ul> 
                <a href="https://www.instagram.com/driftcarros/">
                <img src="/img/insta.png" alt="">
                </a>
                 <a href="https://www.youtube.com/watch?v=zaOtnaJuIzk">
                  <img src="/img/youtube.png" alt="">
                 </a>
                <a href="https://pt-br.facebook.com/groups/247202169028650/">
                <img src="/img/facebook.png" alt="">
                </a>
                </ul> 
            </nav>
            <small>Copyright © 2010 </small>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>