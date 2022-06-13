<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Notifications'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        
        
    <?php echo $__env->renderComponent(); ?>

    <!--
    Verificar se chamada veio da rota notifications-read ou notification
    1. notifications-read: manda o id da notificaçao como parametro e mostra a view direto da função show()
    2. notification: não manda parametro e entra direto na renderização da tabela de registros
    -->
    <?php if(isset($registro_id)): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notifications.controller', ['registro_id' => $registro_id, 'notificationRead' => true])->html();
} elseif ($_instance->childHasBeenRendered('QRu5z6g')) {
    $componentId = $_instance->getRenderedChildComponentId('QRu5z6g');
    $componentTag = $_instance->getRenderedChildComponentTagName('QRu5z6g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QRu5z6g');
} else {
    $response = \Livewire\Livewire::mount('notifications.controller', ['registro_id' => $registro_id, 'notificationRead' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('QRu5z6g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php else: ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notifications.controller')->html();
} elseif ($_instance->childHasBeenRendered('vgLNKk9')) {
    $componentId = $_instance->getRenderedChildComponentId('vgLNKk9');
    $componentTag = $_instance->getRenderedChildComponentTagName('vgLNKk9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vgLNKk9');
} else {
    $response = \Livewire\Livewire::mount('notifications.controller');
    $html = $response->html();
    $_instance->logRenderedChild('vgLNKk9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/livewire/notifications/index.blade.php ENDPATH**/ ?>