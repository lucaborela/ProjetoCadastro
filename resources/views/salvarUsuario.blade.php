<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Merriweather: wght @ 300 & display = swap" rel = "stylesheet">
</head>
   <div class="container">

    <div class= "container d-flex align-items-center justify-content-center" >
       
        <h1>Usuário cadastrado com sucesso!!!!</h1>
   
       </div>

       <div class="col-md-2">Nome:</div>
       
       <div class="colmd-10">{{$usuario->nome}}</div>

       <div class="col-md-2">Data de nascimento:</div>
       <div class="colmd-10">{{$usuario->data_nascimento}}</div>

     

       <div class="col-md-2">Matricula:</div>
       <div class="colmd-10">{{$usuario->matricula}}</div>

       
   </div>
   <div class="container">
    <a class="btn btn-primary" href="menu" role="button"><h5>Menu</h5></a>
 </div>
<body>
 
</body>
</html>