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
