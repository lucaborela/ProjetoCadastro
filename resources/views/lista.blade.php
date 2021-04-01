<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Senha</th>
            <th scope="col">Matricula</th>
            <th scope="col">Ações</th>

            
            

          </tr>
        </thead>
        <tbody>
 @foreach ($usuarios as $usuario)
 <tr>
           <th scope="row">{{$usuario->id}}</th>
           <td scope="row">{{$usuario->nome}}</th>
           <td scope="row">{{$usuario->data_nascimento}}</th>
           <td scope="row">{{$usuario->senha}}</th>
           <td scope="row">{{$usuario->matricula}}</th>
            <td>
            <a href={{route('editRegistro', $usuario->id)}} >Editar</a>
            <a href={{route('excluir', $usuario->id)}} >Excluir</a>
          
           </tr>
     
 @endforeach
          
         <div class="container">
            <a class="btn btn-primary" href="menu" role="button"><h3>Menu</h3></a>
         </div>
        </tbody>
      </table>
</body>
</html>