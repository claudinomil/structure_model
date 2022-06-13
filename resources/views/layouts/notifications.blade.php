@php
    $notifications = \Illuminate\Support\Facades\DB::select(
                    "SELECT notifications.id, notifications.title, notifications.date, notifications.time, notifications.notification, users.name, users.avatar FROM notifications
                    LEFT JOIN users ON users.id=notifications.user_id
                    LEFT JOIN notifications_read ON notifications_read.notification_id=notifications.id
                    WHERE notifications.id NOT IN(SELECT notification_id FROM notifications_read WHERE user_id=".Auth::user()->id.")
                    ORDER BY notifications.date DESC, notifications.time DESC, notifications.title LIMIT 0, 10");

    $notificationsCount = count($notifications);
@endphp

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-bell bx-tada"></i>
        <span class="badge bg-danger rounded-pill">{{ $notificationsCount }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
        <div data-simplebar style="max-height: 230px;">
            @foreach($notifications as $key => $notification)
                @php
                    //dias do envio da notificacao
                    $firstDate = $notification->date;
                    $secondDate = date("Y-m-d");
                    $segundos = strtotime($secondDate) - strtotime($firstDate);
                    $dias = floor($segundos / (60 * 60 * 24));

                    //Dados da Notificação
                    $id = $notification->id;
                    $avatar = $notification->avatar;
                    $name = $notification->name;
                    $title = $notification->title;
                    $notification = $notification->notification;

                    if (strlen($notification) > 35) {$notification = substr($notification, 0, 50).'...';}
                @endphp

                <a href="{{ url('notifications-read/'.$id) }}" class="text-reset notification-item">
                    <div class="d-flex">
                        <img src="{{ URL::asset ($avatar) }}" class="me-3 rounded-circle avatar-xs" alt="user-pic" title="{{ $name }}">
                        <div class="flex-grow-1">
                            <div class="row">
                                <div class="col">
                                    <h6 class="mt-0 mb-1">{{ $title }}</h6>
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0 small text-warning">{{ $dias }} dia(s)</p>
                                </div>
                            </div>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-simplified">{{ $notification }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="p-2 border-top d-grid">
            <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('notifications') }}">
                <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">@lang('translation.Notifications')</span>
            </a>
        </div>
    </div>
</div>
