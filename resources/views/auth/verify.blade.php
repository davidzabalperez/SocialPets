@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un correo a tu bandeja de entrada.') }}
                        </div>
                    @endif

                    {{ __('Para poder acceder a las funcionalidades de la página, porfavor, verifica tu correo electrónico.') }}
                    {{ __('Si no has recibido ningún correo') }}, <a href="{{ route('verification.resend') }}">{{ __('Haz click aquí para recibir otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
