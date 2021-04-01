<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Merriweather: wght @ 300 & display = swap" rel = "stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    body{
        família da fonte: 'Merriweather', serif;
    }
</style>
<body>
    <div class="container">



   
    <h1>Editar Registro</h1>
    <div class="d-flex justify-content-center">...</div>
        
        
        
               
         <div class="row mt-8">
         <div>
            <form method="POST" action="{{route ('salvarRegistro')}}">
                <input type="hidden" name="id" value="{{$usuario->id}}">
            @csrf

                <div class="row mt-3">
                        <label for="nome" class="form-label">Nome completo</label >
                        <input type="text" class="form-control" id="nome" value="{{$usuario->nome}}" name="nome">
                </div>
     
                      <div class="row mt-3">
                        <label for="dataNasc" class="form-label">Data de nascimento</label >
                        <input type="date" class="form-control" id="dataNasc" value="{{$usuario->data_nascimento}}" name="data_nascimento">
                       </div>
                       
                       
                       <div class="row mt-3">
                        <label for="senha" class="form-label">Senha</label >
                        <input type="password" class="form-control" id="senha" value="{{$usuario->senha}}" name="senha">
                       </div>
      

                      <div class="row mt-3">
                        <label for="matricula" class="form-label">Matricula</label >
                        <input type="number" class="form-control" id="matricula" value="{{$usuario->matricula}}" name="matricula">
                       </div>
                   
                     
                     
                       <div class="row mt-3">
                        <button type="submit" class="btn btn-primary"><h5>Salvar</h5></button>
                       </div>
                    </form>
            
                
              <div class="row mt-12">
             Todos os direitos reservados - Luca Abreu Borela , 2021.
              </div>
     
     
        
            </div>
     </body>
     </html>
    </body>
    </html>
</div>
</body>
</html>