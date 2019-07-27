@extends('home')

@section('groups')
    <div class="flex-center">
        <div class="content">
            <div class="image">
                <img src="{{ asset('images/checked.png') }}" alt="">
            </div>
            <div class="message mt-4">
                <span>Tu crédito fue solicitado.</span>
                <p class="mt-3">En esta misma pantalla podrás llevar el seguimiento de tu solicitud.</p>
            </div>
        </div>
    </div>
@endsection
