<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <title> <?php echo $__env->yieldContent('title'); ?> | Structure Model - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.png')); ?>">
        <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <?php $__env->startSection('body'); ?>
        <?php if(Auth::user()->layout_style == 1): ?> <body data-sidebar="dark"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 2): ?> <body data-sidebar="dark" data-sidebar-size="small"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 3): ?> <body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 4): ?> <body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed" data-layout-size="boxed"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 5): ?> <body data-sidebar="dark" data-layout-scrollable="true"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 6): ?> <body data-topbar="dark" data-layout="horizontal"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 7): ?> <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed"> <?php endif; ?>
        <?php if(Auth::user()->layout_style == 8): ?> <body data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true"> <?php endif; ?>

        <?php echo $__env->yieldSection(); ?>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <!-- Sidebar -->
            <?php if(Auth::user()->layout_menu == 1): ?>
                <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <!-- Layout Horizontal -->
            <?php if(Auth::user()->layout_menu == 2): ?>
                <?php echo $__env->make('layouts.horizontal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <!-- Settings User -->
            <?php echo $__env->make('layouts.settings-user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Start right Content here -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>

                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <!-- Right Sidebar -->
        <?php echo $__env->make('layouts.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- javascript -->
        <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/app.blade.php ENDPATH**/ ?>