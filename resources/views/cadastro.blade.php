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
                 <H1>CADASTRE-SE</H1>
       <div >
        
        
        
        
               
         <div class="row mt-8">
         <div>
            <form method="POST" action="{{route ('salvarUsuario')}}">
            @csrf

                <div class="row mt-3">
                        <label for="nomeCompleto" class="form-label">Nome completo</label >
                        <input type="text" class="form-control" id="nomeCompleto" name="nome">
                </div>
     
                      <div class="row mt-3">
                        <label for="dataNasc" class="form-label">Data de nascimento</label >
                        <input type="date" class="form-control" id="dataNasc" name="data_nascimento">
                       </div>
                       
                       
                       <div class="row mt-3">
                        <label for="senha" class="form-label">Senha</label >
                        <input type="password" class="form-control" id="senha" name="senha">
                       </div>
      

                      <div class="row mt-3">
                        <label for="matricula" class="form-label">Matricula</label >
                        <input type="number" class="form-control" id="matricula" name="matricula">
                       </div>
                   
                     
                     
                       <div class="row mt-3">
                        <button type="submit" class="btn btn-primary"><h6>Salvar</h6></button>
                        <a class="btn btn-primary" href="menu" role="button">Menu</a>
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