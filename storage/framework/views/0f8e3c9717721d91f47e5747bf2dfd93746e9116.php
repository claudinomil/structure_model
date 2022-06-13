<?php
    $tools = \Illuminate\Support\Facades\DB::select("SELECT * FROM tools WHERE ordem_visualizacao != 0 ORDER BY ordem_visualizacao");
    $toolsCount = count($tools);
?>

<div class="dropdown d-none d-lg-inline-block ms-1">
    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-customize"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <div class="px-lg-2">
            <div class="row">

                <?php if($toolsCount == 0): ?>
                    <div class="col">Nenhuma Ferramenta encontrada.</div>
                <?php else: ?>
                    <?php
                        $qtdReg = 0;
                    ?>

                    <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $qtdReg++;

                            //Dados da Tool
                            $name = $tool->name;
                            $descricao = $tool->descricao;
                            $url = $tool->url;
                            $icon = $tool->icon;
                        ?>

                        <div class="col-6">
                            <a class="dropdown-icon-item" href="<?php echo e(route($tool->url)); ?>"><i class="<?php echo e($tool->icon); ?> fa-2x"></i><span class="px-2"><?php echo e($tool->name); ?></span></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Claudino Profissional\desenvolvimento\php\projetos_laravel\structure_model\resources\views/layouts/tools.blade.php ENDPATH**/ ?>