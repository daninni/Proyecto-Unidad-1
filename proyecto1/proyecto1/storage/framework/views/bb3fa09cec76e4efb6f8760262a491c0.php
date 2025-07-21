


<?php $__env->startSection('title', 'Lista de Proyectos'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Lista de Proyectos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Responsable</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($proyecto->nombre); ?></td>
                    <td><?php echo e($proyecto->estado); ?></td>
                    <td><?php echo e($proyecto->responsable); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(url('/agregarProyecto')); ?>" class="btn btn-success">Crear Proyecto</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyecto1\resources\views/proyectos/listar.blade.php ENDPATH**/ ?>