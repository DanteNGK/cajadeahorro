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
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="Nombre:" autofocus>
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname" placeholder="Apellido:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" placeholder="Apellido Materno:">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group"> 
                    <input type="text" class="form-control @error('street') is-invalid @enderror" name="street" placeholder="Calle:">
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
                    <input type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" placeholder="C.P:">
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
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Telefono:">
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
