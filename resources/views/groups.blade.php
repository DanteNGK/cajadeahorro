@extends('home')

@section('groups')
    @foreach($groups as $group)
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">{{ $group->description }}</h5>
                <ul class="list-unstyled">
                    <li><span class="label mr-2">Finaliza en:</span> <span class="font-weight-bold">{{ $group->finished_date }}</span></li>
                    <li><span class="label mr-2">Duración:</span> <span class="font-weight-bold">{{ $group->duration }}</span></li>
                    <li><span class="label mr-2">Monto:</span> <span class="font-weight-bold">{{ $group->amount }}</span></li>
                </ul>
                <form class="w-50" method="POST" action="{{ route('credit.store', $group) }}" id="update-user-info">
                    @csrf
                    <button class="loading-btn btn btn-blue btn-sm btn-block mt-4" type="submit">
                        Aplicar
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
