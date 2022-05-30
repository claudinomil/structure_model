@extends('layouts.app-without-nav')

@section('title')
    @lang('translation.Confirm_Password')
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
                                        <p>Confirme sua senha.</p>
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
                                            <img src="{{ URL::asset('/assets/images/logo.png') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('password.confirm') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="userpassword">Senha</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-authentication w-md waves-effect waves-light" type="submit">Confirme sua senha</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        @if (Route::has('password.request'))
                                            <p>Esqueceu sua senha? <a href="{{ route('password.request') }}" class="fw-medium text-primary">Redefina aqui </a> </p>
                                        @endif

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
