


<?php $__env->startSection('title', 'Crear Proyecto'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Proyecto Creado</h2>
    <ul>
        <li><strong>Nombre:</strong> <?php echo e($nuevo->nombre); ?></li>
        <li><strong>Fecha de Inicio:</strong> <?php echo e($nuevo->fechaInicio); ?></li>
        <li><strong>Estado:</strong> <?php echo e($nuevo->estado); ?></li>
        <li><strong>Responsable:</strong> <?php echo e($nuevo->responsable); ?></li>
        <li><strong>Monto:</strong> $<?php echo e(number_format($nuevo->monto, 0, ',', '.')); ?></li>
    </ul>
    <a href="<?php echo e(url('/listarProyectos')); ?>" class="btn btn-primary">Volver a la lista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyecto1\resources\views/proyectos/agregar.blade.php ENDPATH**/ ?>