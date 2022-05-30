<?php
    $notifications = \Illuminate\Support\Facades\DB::select(
                    "SELECT notifications.id, notifications.title, notifications.date, notifications.time, notifications.notification, users.name, users.avatar FROM notifications
                    LEFT JOIN users ON users.id=notifications.user_id
                    LEFT JOIN notifications_read ON notifications_read.notification_id=notifications.id
                    WHERE notifications.id NOT IN(SELECT notification_id FROM notifications_read WHERE user_id=".Auth::user()->id.")
                    ORDER BY notifications.date DESC, notifications.time DESC, notifications.title LIMIT 0, 10");

    $notificationsCount = count($notifications);
?>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-bell bx-tada"></i>
        <span class="badge bg-danger rounded-pill"><?php echo e($notificationsCount); ?></span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
        <div class="p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0" key="t-notifications"> <?php echo app('translator')->get('translation.Notifications'); ?> </h6>
                </div>
            </div>
        </div>
        <div data-simplebar style="max-height: 230px;">
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    //dias do envio da notificacao
                    $firstDate = $notification->date;
                    $secondDate = date("Y-m-d");
                    $segundos = strtotime($secondDate) - strtotime($firstDate);
                    $dias = floor($segundos / (60 * 60 * 24));

                    //Dados da Notificação
                    $avatar = $notification->avatar;
                    $name = $notification->name;
                    $title = $notification->title;
                    $notification = $notification->notification;

                    if (strlen($notification) > 35) {$notification = substr($notification, 0, 35).'...';}
                ?>

                <div class="dropdown-divider"></div>

                <a href="#" class="text-reset notification-item">
                    <div class="d-flex">
                        <img src="<?php echo e(URL::asset ($avatar)); ?>" class="me-3 rounded-circle avatar-xs" alt="user-pic" title="<?php echo e($name); ?>">
                        <div class="flex-grow-1">
                            <div class="row">
                                <div class="col">
                                    <h6 class="mt-0 mb-1"><?php echo e($title); ?></h6>
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0 small text-warning"><?php echo e($dias); ?> dia(s)</p>
                                </div>
                            </div>
                            <div class="font-size-12 text-muted">
                                <p class="mb-1" key="t-simplified"><?php echo e($notification); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/notifications.blade.php ENDPATH**/ ?>