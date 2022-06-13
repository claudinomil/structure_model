<!-- JAVASCRIPT -->
<script src="<?php echo e(URL::asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/metismenu/metismenu.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/node-waves/node-waves.min.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

<!-- App js -->
<script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>

<!-- Main js -->
<script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>

<?php echo $__env->yieldContent('script-bottom'); ?>

<?php echo \Livewire\Livewire::scripts(); ?>


<script>
    //Modal de Confirmação para Exclusão de Registro - (CRUD)
    Livewire.on("triggerDestroy", (id, descricao) => {
        Swal.fire({
            title: 'Confirma exclusão do registro?',
            text: descricao,
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Confirmar',
            confirmButtonColor: '#38c172',
            denyButtonText: `<i class="fa fa-thumbs-down"></i> Cancelar`,
            denyButtonColor: '#e3342f'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit("destroy", id);
            }
        });
    });

    //Modal para Mensagens via Componente
    window.addEventListener('swal:modal', event => {
        Swal.fire({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            showConfirmButton: event.detail.showConfirmButton,
            timer: event.detail.timer
        });
    });
</script>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/vendor-scripts.blade.php ENDPATH**/ ?>