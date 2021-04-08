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
            <th scope="col">CEP</th>
            <th scope="col">logradouro</th>
            <th scope="col">numero</th>
            <th scope="col">bairro</th>
            <th scope="col">complemento</th>
            <th scope="col">cidade</th>
            <th scope="col">estado</th>

            
            

          </tr>
        </thead>
        <tbody>
 @foreach ($enderecos as $endereco)
 <tr>
           <th scope="row">{{$endereco->CEP}}</th>
           <td scope="row">{{$endereco->logradouro}}</th>
           <td scope="row">{{$endereco->numero}}</th>
           <td scope="row">{{$endereco->bairro}}</th>
           <td scope="row">{{$endereco->complemento}}</th>
            <td scope="row">{{$endereco->cidade}}</th>
            <td scope="row">{{$endereco->estado}}</th>
            <td>
            <a href={{route('editEndereco', $endereco->id)}} >Editar</a>
            <a href={{route('excluirEndereco', $endereco->id)}} >Excluir</a>
          
           </tr>
     
 @endforeach
          
         <div class="container">
            <a class="btn btn-primary" href="{{ route('menu') }}" role="button"><h3>Menu</h3></a>
         </div>
        </tbody>
      </table>
</body>
</html>