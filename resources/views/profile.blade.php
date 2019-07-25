@extends('layouts.app')

@section('content')
    <div class="register-container p-3">
        @if(empty($user->info->first_name && $user->info->first_surname && $user->info->second_surname && $user->info->id))
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
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                       placeholder="Nombre:" autofocus value="{{ Auth::user()->name }}"> @error('first_name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname"
                                       placeholder="Apellido:"> @error('first_surname')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('second_surname') is-invalid @enderror"
                                       name="second_surname" placeholder="Apellido Materno:"> @error('second_surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id"
                                       placeholder="Clave de elector:"> @error('id')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" placeholder="Telefono:"> @error('phone')
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
                                <input type="text" class="form-control @error('postcode') is-invalid @enderror"
                                       name="postcode" placeholder="C.P:"> @error('name')
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
                <form method="PUT" action="{{ route('user.update') }}">
                    @csrf
                    <div class="card-profile-info">
                        <h1 class="text-center p-4">Datos de usuario</h1>
                        <ul class="list-unstyled">
                            <li><span class="label mr-3">Nombre:</span> <span
                                    class="font-weight-bold">{{ $user->info->first_name . " " . $user->info->first_surname . " " . $user->info->second_surname }}</span>
                            </li>
                            <li><span class="label mr-3">Clave de elector:</span> <span
                                    class="font-weight-bold">{{ $user->info->id }}</span></li>
                            <li><span class="label mr-3">Teléfono:</span> <span
                                    class="font-weight-bold">{{ $user->info->phone }}</span></li>
                            <li><span class="label  mr-3">Dirección:</span> <span
                                    class="font-weight-bold">{{ $user->address->street }}</span></li>
                            <li><span class="label mr-3">Colonia:</span> <span
                                    class="font-weight-bold">{{ $user->address->neighborhood }}</span></li>
                            <li><span class="label mr-3">C.P:</span> <span
                                    class="font-weight-bold">{{ $user->address->postcode }}</span></li>
                            <li><span class="label mr-3">Municipio:</span> <span
                                    class="font-weight-bold">{{ $user->address->municipality }}</span></li>
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
