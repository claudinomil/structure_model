<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('/assets/images/logo.png')); ?>" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-dark.png')); ?>" alt="" height="35">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-light-min.png')); ?>" alt="" height="35">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('/assets/images/logo-light.png')); ?>" alt="" height="35">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <span key="t-megamenu"><?php echo app('translator')->get('translation.Mega_Menu'); ?></span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li><a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-applications"><?php echo app('translator')->get('translation.Applications'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li><a href="javascript:void(0);" key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-calendar"><?php echo app('translator')->get('translation.Calendars'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-email"><?php echo app('translator')->get('translation.Email'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-projects"><?php echo app('translator')->get('translation.Projects'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-extra-pages"><?php echo app('translator')->get('translation.Extra_Pages'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li><a href="javascript:void(0);" key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal_layout'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components"><?php echo app('translator')->get('translation.UI_Components'); ?></h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li><a href="javascript:void(0);" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></a></li>
                                        <li><a href="javascript:void(0);" key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <div>
                                        <img src="<?php echo e(URL::asset ('/assets/images/megamenu-img.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php switch(Session::get('lang')):
                        case ('pt-br'): ?>
                            <img src="<?php echo e(URL::asset('/assets/images/flags/br.jpg')); ?>" alt="Header Language" height="16">
                        <?php break; ?>
                        <?php case ('en'): ?>
                            <img src="<?php echo e(URL::asset('/assets/images/flags/us.jpg')); ?>" alt="Header Language" height="16">
                        <?php break; ?>
                        <?php default: ?>
                            <img src="<?php echo e(URL::asset('/assets/images/flags/br.jpg')); ?>" alt="Header Language" height="16">
                    <?php endswitch; ?>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="<?php echo e(url('index/pt-br')); ?>" class="dropdown-item notify-item language" data-lang="pt-br">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/br.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">Português</span>
                    </a>
                    <a href="<?php echo e(url('index/en')); ?>" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="<?php echo e(URL::asset ('/assets/images/flags/us.jpg')); ?>" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/github.png')); ?>" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/bitbucket.png')); ?>" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/dribbble.png')); ?>" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/dropbox.png')); ?>" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/mail_chimp.png')); ?>" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="<?php echo e(URL::asset ('/assets/images/brands/slack.png')); ?>" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <?php echo $__env->make('layouts.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo e(ucfirst(Auth::user()->name)); ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="user-profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></span></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>