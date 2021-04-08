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
<style> 
    body{
        família da fonte: 'Merriweather', serif;
    }
    </style>
    <body>
        <div class="container" >
            <div class="d-flex justify-content-center">...</div>
                 <H1>CADASTRE O ENDEREÇO</H1>
       <div >
        
        
        
        
               
         <div class="row mt-8">
         <div>
            <form method="POST" action="{{route ('salvarEndereco')}}">
            @csrf

                <div class="row mt-3">
                        <label for="CEP" class="form-label">CEP</label >
                        <input type="text" class="form-control" id="CEP" name="CEP">
                </div>
     
                      <div class="row mt-3">
                        <label for="logradouro " class="form-label">Logradouro </label >
                        <input type="text" class="form-control" id="logradouro " name="logradouro">
                       </div>
                       
                       
                       <div class="row mt-3">
                        <label for="numero " class="form-label">Número </label >
                        <input type="number" class="form-control" id="numero " name="numero">
                       </div>
      

                      <div class="row mt-3">
                        <label for="bairro" class="form-label">Bairro</label >
                        <input type="text" class="form-control" id="bairro" name="bairro">
                       </div>

                       
                      <div class="row mt-3">
                        <label for="complemento" class="form-label">Complemento</label >
                        <input type="text" class="form-control" id="complemento" name="complemento">
                       </div>

                       
                      <div class="row mt-3">
                        <label for="cidade" class="form-label">Cidade</label >
                        <input type="text" class="form-control" id="cidade" name="cidade">
                       </div>

                       
                      <div class="row mt-3">
                        <label for="estado" class="form-label">Estado</label >
                        <input type="text" class="form-control" id="estado" name="estado">
                       </div>
                   
                     
                     
                       <div class="row mt-3">
                        <button type="submit" class="btn btn-primary"><h6>Salvar</h6></button>
                        
                       </div>
                    </form>
                   

          


                    </div>
                    
            
                <div class="container">

                    <div class="row mt-12">
                        Todos os direitos reservados - Luca Abreu Borela , 2021.
                         </div>
                </div>
             
     
        
       
     </body>
     </html>
    </body>
    </html>