<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Merriweather: wght @ 300 & display = swap" rel="stylesheet">
</head>
<style>
    body {
        família da fonte: 'Merriweather', serif;
    }

</style>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="d-flex justify-content-center">
                <h1>Operações:</h1>
            </div>
        </div>


        @csrf
        <div class="mb-3">
            <form method="POST" action="{{ route('lista') }}">
        <div class="mb-3">

            <div class="mb-3">
                <form method="POST" action="{{ route('listaEndereco') }}">
            <div class="mb-3">
                    
            <form method="POST" action="{{ route('salvarUsuario') }}">
            <div class="mb-3">


            <form method="POST" action="{{ route('salvarEndereco') }}">


            <div class="mb-3">
                 <a href="{{ route('cadastro') }}" class="btn btn-primary">
                           <h4>Cadastro</h4>
                 </a>

                        </div>

                        <div class="mb-3">

                            <a href="{{ route('lista') }}" class="btn btn-primary">
                                <h4>Listar Usuários</h4>
                            </a>
                        </div>
                          
                        
                       <div class="mb-3">

                        <a href="{{ route('cadastroEndereco') }}" class="btn btn-primary">
                            <h4>Cadastrar endereços</h4>
                        </a>
                        </div>
        
                               

                                <div class="mb-3">

                                    <a href="{{ route('listaEndereco') }}" class="btn btn-primary">
                                        <h4>Listar Endereços</h4>
                                    </a>
                                </div>
    


</body>
