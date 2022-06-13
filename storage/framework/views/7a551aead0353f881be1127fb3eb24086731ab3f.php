<?php
//Iniciar Sessão
session_start();

//Se já passou por aqui e guardou a $_SESSION['breadcrumbCurrentPageTitle'], então colocar os valores Current como Previous
if (isset($_SESSION['breadcrumbCurrentPageTitle'])) {
    $_SESSION['breadcrumbPreviousPageTitle'] = $_SESSION['breadcrumbCurrentPageTitle'];
    $_SESSION['breadcrumbPreviousPageRoute'] = $_SESSION['breadcrumbCurrentPageRoute'];
} else {
    $_SESSION['breadcrumbPreviousPageTitle'] = '';
    $_SESSION['breadcrumbPreviousPageRoute'] = '';
}

//Buscando valores Current
$_SESSION['breadcrumbCurrentPageRoute'] = Route::currentRouteName();

//Buscar Registro na tabela submodules
$submodule = \App\Models\Submodule::where('menu_route', $_SESSION['breadcrumbCurrentPageRoute'])->get('name');

//Gravar dados
if ($submodule->count() > 0) {
    $_SESSION['breadcrumbCurrentPageTitle'] = $submodule[0]['name'];
} else {
    $_SESSION['breadcrumbCurrentPageTitle'] = '';
}

//Se foi a primeira entrada aqui e a $_SESSION['breadcrumbPreviousPageTitle'] for vazio, então gravar os Previous igual aos Current
if ($_SESSION['breadcrumbPreviousPageTitle'] == '') {
    $_SESSION['breadcrumbPreviousPageTitle'] = $_SESSION['breadcrumbCurrentPageTitle'];
    $_SESSION['breadcrumbPreviousPageRoute'] = $_SESSION['breadcrumbCurrentPageRoute'];
}
?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo e($_SESSION['breadcrumbCurrentPageTitle']); ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <?php if($_SESSION['breadcrumbPreviousPageTitle'] != ''): ?>
                        <li class="breadcrumb-item"><a href="<?php echo e(route($_SESSION['breadcrumbPreviousPageRoute'])); ?>"><?php echo e($_SESSION['breadcrumbPreviousPageTitle']); ?></a></li>
                    <?php endif; ?>

                    <?php if($_SESSION['breadcrumbCurrentPageTitle'] != ''): ?>
                        <li class="breadcrumb-item active"><?php echo e($_SESSION['breadcrumbCurrentPageTitle']); ?></li>
                    <?php endif; ?>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>