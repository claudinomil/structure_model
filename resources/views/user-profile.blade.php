@extends('layouts.app')

@section('title') @lang('translation.Profile') @endsection

@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Contacts @endslot
        @slot('page_title') Profile @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">@lang('translation.Main')</h5>
                                <p>@lang('translation.Main_data_of_your_Profile')</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">{{ Auth::user()->function }}</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target=".update-profile"><i class="fa fa-user-shield"></i> @lang('translation.Edit_Profile')</a>
                                    <a href="" class="btn btn-warning waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target=".change-password"><i class="fa fa-edit"></i> @lang('translation.Change_Password')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">@lang('translation.Personal_Information')</h4>
                    <p class="text-muted mb-4"></p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">@lang('translation.Name') :</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">@lang('translation.Birth') :</th>
                                    <td>{{ date('d/m/Y', strtotime(Auth::user()->dob)) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">@lang('translation.E-mail') :</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Completed Projects</p>
                                    <h4 class="mb-0">125</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-check-circle font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Pending Projects</p>
                                    <h4 class="mb-0">12</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-hourglass font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium mb-2">Total Revenue</p>
                                    <h4 class="mb-0">$36,524</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-package font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">My Projects</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Projects</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Structure Model admin UI</td>
                                    <td>2 Sep, 2019</td>
                                    <td>20 Oct, 2019</td>
                                    <td>$506</td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>Structure Model admin Logo</td>
                                    <td>1 Sep, 2019</td>
                                    <td>2 Sep, 2019</td>
                                    <td>$94</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Redesign - Landing page</td>
                                    <td>21 Sep, 2019</td>
                                    <td>29 Sep, 2019</td>
                                    <td>$156</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>App Landing UI</td>
                                    <td>29 Sep, 2019</td>
                                    <td>04 Oct, 2019</td>
                                    <td>$122</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Blog Template</td>
                                    <td>05 Oct, 2019</td>
                                    <td>16 Oct, 2019</td>
                                    <td>$164</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Redesign - Multipurpose Landing</td>
                                    <td>17 Oct, 2019</td>
                                    <td>05 Nov, 2019</td>
                                    <td>$192</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Logo Branding</td>
                                    <td>04 Nov, 2019</td>
                                    <td>05 Nov, 2019</td>
                                    <td>$94</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Profile -->
    <div class="modal fade update-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">@lang('translation.Edit_Profile')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="update-profile">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">

                        <div class="mb-3">
                            <label for="avatar"><i class="fa fa-arrow-right"></i> @lang('translation.Profile_Picture')</label>
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="text-start mt-2">
                                        <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="rounded-circle avatar-lg">
                                    </div>
                                </div>
                                <div class="col-12 col-md-9 align-self-center">
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" autofocus>
                                        <label class="input-group-text" for="avatar">@lang('translation.Upload')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                        </div>
                        <div class="mb-3">
                            <label><i class="fa fa-arrow-right"></i> @lang('translation.Layout_Mode')</label>
                            <div class="input-group">
                                <div class="col-6">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="radio" name="layout-mode" id="layout-mode-light" value="1" @if (Auth::user()->layout_mode == '1') checked @endif>
                                        <label class="form-check-label" for="layout-mode-light">@lang('translation.Light')</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input theme-choice" type="radio" name="layout-mode" id="layout-mode-dark" value="2" @if (Auth::user()->layout_mode == '2') checked @endif>
                                        <label class="form-check-label" for="layout-mode-dark">@lang('translation.Dark')</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label><i class="fa fa-arrow-right"></i> @lang('translation.Menu_Vertical')</label>
                                    <div class="input-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-vertical" value="11" @if (Auth::user()->layout_menu == '1' and Auth::user()->layout_style == '1') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-vertical">@lang('translation.Simple')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-vertical-compact-sidebar" value="12" @if (Auth::user()->layout_menu == '1' and Auth::user()->layout_style == '2') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-vertical-compact-sidebar">@lang('translation.Compact')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-vertical-icon-sidebar" value="13" @if (Auth::user()->layout_menu == '1' and Auth::user()->layout_style == '3') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-vertical-icon-sidebar">@lang('translation.Icon')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-vertical-boxed" value="14" @if (Auth::user()->layout_menu == '1' and Auth::user()->layout_style == '4') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-vertical-boxed">@lang('translation.Boxed')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-vertical-scrollable" value="15" @if (Auth::user()->layout_menu == '1' and Auth::user()->layout_style == '5') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-vertical-scrollable">@lang('translation.Scrollable')</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label><i class="fa fa-arrow-right"></i> @lang('translation.Menu_Horizontal')</label>
                                    <div class="input-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-horizontal" value="26" @if (Auth::user()->layout_menu == '2' and Auth::user()->layout_style == '6') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-horizontal">@lang('translation.Simple')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-horizontal-boxed-width" value="27" @if (Auth::user()->layout_menu == '2' and Auth::user()->layout_style == '7') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-horizontal-boxed-width">@lang('translation.Boxed_Width')</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input theme-choice" type="radio" name="layout-menu" id="layout-menu-horizontal-scrollable" value="28" @if (Auth::user()->layout_menu == '2' and Auth::user()->layout_style == '8') checked @endif>
                                                    <label class="form-check-label" for="layout-menu-horizontal-scrollable">@lang('translation.Scrollable')</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light UpdateProfile" data-id="{{ Auth::user()->id }}" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Change-Password -->
    <div class="modal fade change-password" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">@lang('translation.Change_Password')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="change-password">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">

                        <div class="mb-3">
                            <label for="current_password">@lang('translation.Current_Password')</label>
                            <input id="current-password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password" placeholder="Enter Current Password" value="{{ old('current_password') }}">
                            <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                        </div>
                        <div class="mb-3">
                            <label for="newpassword">@lang('translation.New_Password')</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new_password" placeholder="Enter New Password">
                            <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                        </div>
                        <div class="mb-3">
                            <label for="userpassword">@lang('translation.Confirm_Password')</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new_password" placeholder="Enter New Confirm password">
                            <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                        </div>
                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id="{{ Auth::user()->id }}" type="submit">@lang('translation.Update_Password')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- profile init -->
    <script src="{{ URL::asset('/assets/js/pages/profile.init.js') }}"></script>

    <script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#dobError').text('');
        $('#avatarError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#dobError').text('');
                $('#avatarError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#dobError').text(response.responseJSON.errors.dob);
                $('#avatarError').text(response.responseJSON.errors.avatar);
            }
        });
    });

    $('#change-password').on('submit',function(event){
        event.preventDefault();
        var Id = $('#data_id').val();
        var current_password = $('#current-password').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();
        $('#current_passwordError').text('');
        $('#passwordError').text('');
        $('#password_confirmError').text('');
        $.ajax({
            url: "{{ url('update-password') }}" + "/" + Id,
            type:"POST",
            data:{
                "current_password": current_password,
                "password": password,
                "password_confirmation": password_confirm,
                "_token": "{{ csrf_token() }}",
            },
            success:function(response){
                $('#current_passwordError').text('');
                $('#passwordError').text('');
                $('#password_confirmError').text('');
                if(response.isSuccess == false){
                    $('#current_passwordError').text(response.Message);
                }else if(response.isSuccess == true){
                    setTimeout(function () {
                        window.location.href = "{{ route('root') }}";
                    }, 1000);
                }
            },
            error: function(response) {
                $('#current_passwordError').text(response.responseJSON.errors.current_password);
                $('#passwordError').text(response.responseJSON.errors.password);
                $('#password_confirmError').text(response.responseJSON.errors.password_confirmation);
            }
        });
    });
    </script>
@endsection
