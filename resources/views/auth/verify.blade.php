@extends('layouts.app-without-nav')

@section('title')
    Verifique a senha
@endsection

@section('css')
    <link href="{{ URL::asset('/assets/css/claudino.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('body')
    <body>
@endsection

@section('content')
    <div class="account-pages pt-sm-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden border border-2">
                        <div class="bg-authentication">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-authentication p-4">
                                        <h5 class="text-authentication">Sistema RH</h5>
                                        <p>Verifique a senha.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ URL::asset('/assets/images/logo.png') }}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                                </div>
                            @endif

                            {{ __('Antes de continuar, verifique seu e-mail para obter um link de verificação.') }}
                            {{ __('Se você não recebeu o e-mail') }},
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-authentication w-md waves-effect waves-light" type="submit">{{ __('Clique aqui para solicitar outro') }}</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p>Lembrou-se ? <a href="{{ url('login') }}" class="fw-medium text-primary"> Faça login aqui</a></p>
                                        <p>Não tem uma conta? <a href="{{ url('register') }}" class="fw-medium text-primary">Cadastre-se agora </a> </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="text-center">© <script>document.write(new Date().getFullYear())</script> CBMERJ. Criado por Claudino Mil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
