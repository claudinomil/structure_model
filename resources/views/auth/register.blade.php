@extends('layouts.app-without-nav')

@section('title')
    @lang('translation.Register')
@endsection

@section('css')
    <link href="{{ URL::asset('/assets/css/claudino.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
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
                                        <p>Cadastre-se-se agora.</p>
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
                            <div class="p-2">
                                <form method="POST" class="form-horizontal" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ old('email') }}" name="email" autofocus required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Usuário</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="username" name="name" autofocus required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Senha</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" autofocus required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmpassword" class="form-label">Confirma Senha</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="password_confirmation" name="password_confirmation" autofocus required>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="userdob">Data de nascimento</label>
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control @error('dob') is-invalid @enderror" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ old('dob') }}" data-provide="datepicker" name="dob" autofocus required>
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="avatar">Foto do perfil</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus required>
                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        </div>
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-authentication waves-effect waves-light" type="submit">Registrar</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p>Ao se registrar, você concorda com o <a href="#" class="text-primary">Termo de uso</a></p>
                                        <p>Já tem uma conta ? <a href="{{ url('login') }}" class="fw-medium text-primary">Login</a> </p>
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

@section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endsection
