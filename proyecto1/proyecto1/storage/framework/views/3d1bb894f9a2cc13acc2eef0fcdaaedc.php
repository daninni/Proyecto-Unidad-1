


<?php $__env->startSection('title', 'Actualizar Proyecto'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Proyecto Actualizado (Simulado)</h2>
    <p>Proyecto con ID: <strong><?php echo e($id); ?></strong> actualizado con los siguientes datos:</p>
    <ul>
        <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><strong><?php echo e(ucfirst($key)); ?>:</strong> <?php echo e($valor); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <a href="<?php echo e(url('/listarProyectos')); ?>" class="btn btn-primary">Volver a la lista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyecto1\resources\views/proyectos/actualizar.blade.php ENDPATH**/ ?>