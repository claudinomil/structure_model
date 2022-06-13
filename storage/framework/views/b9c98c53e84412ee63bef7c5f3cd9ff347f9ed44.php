<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Modules'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        
        
    <?php echo $__env->renderComponent(); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modules.controller')->html();
} elseif ($_instance->childHasBeenRendered('cY87ZsO')) {
    $componentId = $_instance->getRenderedChildComponentId('cY87ZsO');
    $componentTag = $_instance->getRenderedChildComponentTagName('cY87ZsO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cY87ZsO');
} else {
    $response = \Livewire\Livewire::mount('modules.controller');
    $html = $response->html();
    $_instance->logRenderedChild('cY87ZsO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

    <script>
        //executar javascript durante certos eventos
        document.addEventListener("DOMContentLoaded", () => {
            //ao entrar no componente
            configurarDataTable(1);
            showTooltips();
            hideTooltips();

            //ao navegar pelo componente
            Livewire.hook('message.processed', (message, component) => {
                configurarDataTable(1);
                showTooltips();
                hideTooltips();

                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {return new bootstrap.Popover(popoverTriggerEl)})
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/livewire/modules/index.blade.php ENDPATH**/ ?>