<?php $__env->startSection('content'); ?>
<h3>Edit Filiere</h3>
<form method="POST" action="<?php echo e(route('filieres.update', $filiere->id)); ?>" enctype="multipart/form-data" >

    <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>

   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" value="<?php echo e($filiere->name); ?>" name="name" />
</div>

<div class="form-group>
    <label for="name" >Description: </label>
    <input type="text" class="form-control" value="<?php echo e($filiere->description); ?>" name="description" />
</div>



<button type="submit" class="btn btn-primary" >Update</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/editf.blade.php ENDPATH**/ ?>