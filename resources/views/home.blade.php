@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="d-flex flex-row justify-content-center align-items-center h-100 p-5">
                        @yield('groups')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
