<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    @include('components.navbar')
    <div class="container" style="margin-top: 11vh;" >
    <h1 style="text-align: center;">Bem Vindo à Matérias</h1>
    <!-- blade -->
    @foreach($materias as $k)
    <div class="card mb-3" style="max-width: 740px;margin: 0px auto;">
        <div class="row g-0">
            <div class="col-md-4">
            <img style="max-height: 190px;" src="{{$k['nm_path_img']}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$k['nm_name']}}</h5>
                <p class="card-text">{{$k['txt_desc']}}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div style="text-align: center;padding:9px"> <a href="/atividade/{{$k['id']}}"><button style="width:30%;padding: 9px;" type="button" class="btn btn-success">Entrar</button></a></div>
            </div>
            
            </div>
        </div>
    @endforeach
    </div>




   



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>