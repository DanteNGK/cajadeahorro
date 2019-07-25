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
                        <button class="btn btn-blue btn-lg btn-block mt-5" type="submit">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        @else
            <div class="text-center p-4 mb-4">
                <h1>Información actual</h1>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                <form class="w-25" method="POST" action="{{ route('user.update') }}" id="update-user-info">
                    @method('PUT')
                    @csrf
                    <div class="form-profile-update-info">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Información personal</legend>
                            <div class="form-group">
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="info[first_name]"
                                       placeholder="Nombre:" autofocus value="{{ $user->info->first_name }}"> @error('first_name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('first_surname') is-invalid @enderror" name="info[first_surname]"
                                       placeholder="Apellido:" value="{{ $user->info->first_surname }}"> @error('first_surname')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('second_surname') is-invalid @enderror"
                                       name="info[second_surname]" placeholder="Apellido Materno:" value="{{ $user->info->second_surname }}"> @error('second_surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('id') is-invalid @enderror" name="info[id]"
                                       placeholder="Clave de elector:" value="{{ $user->info->id }}"> @error('id')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="info[phone]" placeholder="Telefono:" value="{{ $user->info->phone }}"> @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                        </fieldset>
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Dirección</legend>
                            <div class="form-group">
                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                       name="address[street]"
                                       placeholder="Calle:" value="{{ $user->address->street }}"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('neighborhood') is-invalid @enderror"
                                       name="address[neighborhood]" placeholder="Colonia:" value="{{ $user->address->neighborhood }}"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('postcode') is-invalid @enderror"
                                       name="address[postcode]" placeholder="C.P:" value="{{ $user->address->postcode }}"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('municipality') is-invalid @enderror"
                                       name="address[municipality]" placeholder="Municipio:" value="{{ $user->address->municipality }}"> @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                            </div>
                        </fieldset>
                        <button class="loading-btn btn btn-blue btn-lg btn-block mt-5" type="submit">
                            <span class="spn-hidden spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span>
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection
