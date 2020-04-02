@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zweryfikuj swój adres email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Link weryfikacyjny został wysłany na Twój adres email.
                        </div>
                    @endif

                    Przed kontynuowaniem, sprawdź adres e-mail, aby uzyskać link weryfikacyjny.
                    Jeśli nie otrzymałeś wiadomości e-mail, <a href="{{ route('verification.resend') }}">kliknij tutaj, aby poprosić o kolejny</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
