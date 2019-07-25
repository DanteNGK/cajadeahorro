@extends('layouts.app')

@section('content')
    <div class="register-container p-3">
        @if(empty($user))
            <div class="text-center p-4 mb-4">
                <h1>Mi perfil</h1>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                <form class="w-25" method="post" action="{{ route('user.register') }}">
                    @csrf
                    <div class="form-profile-info">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Información personal</legend>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       placeholder="Nombre:" autofocus value="{{ Auth::user()->name }}"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="last_name"
                                       placeholder="Apellido:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                       name="middle_name" placeholder="Apellido Materno:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"
                                       placeholder="Clave de elector:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('cellphone') is-invalid @enderror"
                                       name="cellphone" placeholder="Telefono:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                        </fieldset>
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Dirección</legend>
                            <div class="form-group">
                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                       name="street"
                                       placeholder="Calle:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('neighborhood') is-invalid @enderror"
                                       name="neighborhood" placeholder="Colonia:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                       name="postal_code" placeholder="C.P:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('municipality') is-invalid @enderror"
                                       name="municipality" placeholder="Municipio:"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-blue btn-lg btn-block mt-5">Enviar</button>
                    </div>
                </form>
            </div>
        @else
            <div class="container justify-content-center w-50">
                <form method="post" action="{{ route('user.update') }}">
                    @csrf
                    <div class="card-profile-info">
                        <h1 class="text-center p-4">Datos de usuario</h1>
                        <ul class="list-unstyled">
                            <li><span class="label">Nombre:</span> <span
                                    class="font-weight-bold">{{ $user->name . " " . $user->last_name . " " . $user->middle_name }}</span>
                            </li>
                            <li><span class="label">Dirección:</span> <span
                                    class="font-weight-bold">{{ $user->street }}</span></li>
                            <li><span class="label">Colonia:</span> <span
                                    class="font-weight-bold">{{ $user->neighborhood }}</span></li>
                            <li><span class="label">C.P:</span> <span
                                    class="font-weight-bold">{{ $user->postal_code }}</span></li>
                            <li><span class="label">Municipio:</span> <span
                                    class="font-weight-bold">{{ $user->municipality }}</span></li>
                            <li><span class="label">Clave de elector:</span> <span
                                    class="font-weight-bold">{{ $user->id }}</span></li>
                            <li><span class="label">Teléfono:</span> <span
                                    class="font-weight-bold">{{ $user->cellphone }}</span></li>
                        </ul>
                        <div class="p-3">
                            <button type="submit" class="btn btn-blue btn-lg btn-block">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection
