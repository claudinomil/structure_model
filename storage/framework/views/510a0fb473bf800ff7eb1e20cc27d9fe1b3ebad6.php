<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="index" class="waves-effect active">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page"><?php echo app('translator')->get('translation.Starter_Page'); ?></span>
                    </a>
                </li>
                <li>
                    <a href="layouts-horizontal" class="waves-effect ">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page"><?php echo app('translator')->get('translation.Horizontal'); ?></span>
                    </a>
                </li>
                <li>
                    <a href="layouts-horizontal-boxed-width" class="waves-effect ">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-starter-page"><?php echo app('translator')->get('translation.Boxed_Width'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i><span key="t-layouts"><?php echo app('translator')->get('translation.Layouts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical"><?php echo app('translator')->get('translation.Vertical'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-app-vertical" key="t-vertical"><?php echo app('translator')->get('translation.Vertical'); ?></a></li>
                                <li><a href="layouts-app-compact-sidebar" key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a></li>
                                <li><a href="layouts-app-icon-sidebar" key="t-icon-sidebar"><?php echo app('translator')->get('translation.Icon_Sidebar'); ?></a></li>
                                <li><a href="layouts-app-boxed" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a></li>
                                <li><a href="layouts-app-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-app-horizontal" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a></li>
                                <li><a href="layouts-app-hori-boxed-width" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a></li>
                                <li><a href="layouts-app-hori-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level"><?php echo app('translator')->get('translation.Multi_Level'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1"><?php echo app('translator')->get('translation.Level_1.1'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2"><?php echo app('translator')->get('translation.Level_1.2'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1"><?php echo app('translator')->get('translation.Level_2.1'); ?></a>
                                </li>
                                <li><a href="javascript: void(0);" key="t-level-2-2"><?php echo app('translator')->get('translation.Level_2.2'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>