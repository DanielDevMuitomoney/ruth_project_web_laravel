<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url('https://i0.wp.com/www.iparh.com/wp-content/uploads/2018/06/fundo-azul-curvas-escuro.jpg?ssl=1');">
@include('components.navbar')

@if($id==1)
    <div class="container" style="margin-top: 4%;">
    <div class="card">
  <div class="card-header">
    Máteria de português.
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <div class="card text-center">
  <div class="card-header">
    Atividade
  </div>
  <div class="card-body">
    <h5 class="card-title">Resenha do Livro</h5>
    <p class="card-text">Fazer uma resenha sobre o livro "O Auto da Compadecida"</p>
    <a href="#" class="btn btn-primary">Entregar</a>
  </div>
  <div class="card-footer text-muted">
    Data de entrega: 2 de março
  </div>
</div>
<!-- 2 att -->

<div class="card text-center" style="margin-top:2% ;">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>

    </blockquote>
  </div>
</div>

    </div>
@elseif($id==2)
    <p>bem vindo a mat</p>

@endif
</body>
</html>

