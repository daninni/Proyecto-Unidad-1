


<?php $__env->startSection('title', 'Eliminar Proyecto'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Proyecto Eliminado (Simulado)</h2>
    <p>El proyecto con ID <strong><?php echo e($id); ?></strong> ha sido eliminado.</p>
    <a href="<?php echo e(url('/listarProyectos')); ?>" class="btn btn-primary">Volver a la lista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyecto1\resources\views/proyectos/eliminar.blade.php ENDPATH**/ ?>