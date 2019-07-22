<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cajadeahorro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="register-container p-3">
            <div class="text-center p-4">
                <h1>Registro de usuario</h1>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center h-100"> 

                <form class="w-25" method="post" action="{{ route('user.register') }}">
                  @csrf
                  <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre:" autofocus>
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" placeholder="Apellido:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="middle_name" placeholder="Apellido Materno:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="street" placeholder="Calle:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" placeholder="Colonia:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" placeholder="C.P:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control @error('municipality') is-invalid @enderror" name="municipality" placeholder="Municipio:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" placeholder="Clave de elector:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>                  
                  <div class="form-group">
                    <input type="text" class="form-control @error('cellphone') is-invalid @enderror" name="cellphone" placeholder="Telefono:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </body>
</html>
