@extends('home')

@section('groups')
    <form class="w-50" method="POST" action="{{ route('group.search') }}" id="update-user-info">
        @csrf
        <div class="form-profile-update-info">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Cajas de ahorro</legend>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Frecuencia de pago</label>
                    <select class="form-control" id="payment-frequency" name="frequency">
                        @foreach($paymentFrequencies as $paymentFrequency)
                            <option value="{{ $paymentFrequency->id }}">{{ $paymentFrequency->name }}</option>
                        @endforeach
                    </select>
                </div>
            </fieldset>
            <button class="loading-btn btn btn-blue btn-lg btn-block mt-4" type="submit">
                <span class="spn-hidden spinner-border spinner-border-sm" role="status" aria-hidden="true" hidden></span>
                Solicitar
            </button>
        </div>
    </form>
@endsection
