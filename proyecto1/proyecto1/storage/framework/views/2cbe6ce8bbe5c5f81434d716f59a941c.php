


<?php $__env->startSection('title', 'Detalle del Proyecto'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($proyecto): ?>
        <h2>Detalle del Proyecto</h2>
        <ul>
            <li><strong>ID:</strong> <?php echo e($proyecto->id); ?></li>
            <li><strong>Nombre:</strong> <?php echo e($proyecto->nombre); ?></li>
            <li><strong>Fecha de Inicio:</strong> <?php echo e($proyecto->fechaInicio); ?></li>
            <li><strong>Estado:</strong> <?php echo e($proyecto->estado); ?></li>
            <li><strong>Responsable:</strong> <?php echo e($proyecto->responsable); ?></li>
            <li><strong>Monto:</strong> $<?php echo e(number_format($proyecto->monto, 0, ',', '.')); ?></li>
        </ul>
    <?php else: ?>
        <h2>Proyecto no encontrado</h2>
        <p>No existe un proyecto con ese ID.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyecto1\resources\views/proyectos/detalle.blade.php ENDPATH**/ ?>