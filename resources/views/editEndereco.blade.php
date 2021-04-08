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



   
    <h1>Editar Endereços</h1>
    <div class="d-flex justify-content-center">...</div>
        
        
        
               
         <div class="row mt-8">
         <div>
            <form method="POST" action="{{route ('salvarEndereco')}}">
                <input type="hidden" name="id" value="{{$endereco->id}}">
            @csrf

                <div class="row mt-3">
                        <label for="CEP" class="form-label">CEP</label >
                        <input type="text" class="form-control" id="CEP" value="{{$endereco->CEP}}" name="CEP">
                </div>
     
                      <div class="row mt-3">
                        <label for="logradouro" class="form-label">Logradouro</label >
                        <input type="text" class="form-control" id="logradouro" value="{{$endereco->logradouro}}" name="logradouro">
                       </div>
                       
                       
                       <div class="row mt-3">
                        <label for="numero" class="form-label">numero</label >
                        <input type="number" class="form-control" id="numero" value="{{$endereco->numero}}" name="numero">
                       </div>
      

                      <div class="row mt-3">
                        <label for="bairro" class="form-label">Bairro</label >
                        <input type="text" class="form-control" id="bairro" value="{{$endereco->bairro}}" name="bairro">
                       </div>

                       <div class="row mt-3">
                        <label for="complemento" class="form-label">Complemento</label >
                        <input type="text" class="form-control" id="complemento" value="{{$endereco->complemento}}" name="complemento">
                       </div>

                       <div class="row mt-3">
                        <label for="cidade" class="form-label">Cidade</label >
                        <input type="text" class="form-control" id="cidade" value="{{$endereco->cidade}}" name="cidade">
                       </div>

                       <div class="row mt-3">
                        <label for="estado" class="form-label">Estado</label >
                        <input type="text" class="form-control" id="estado" value="{{$endereco->estado}}" name="estado">
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