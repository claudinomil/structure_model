<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <?php
                $homeController = new \App\Http\Controllers\HomeController();
                echo $homeController->menu(1);
            ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>