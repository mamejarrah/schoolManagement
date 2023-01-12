<?php $__env->startSection('content'); ?>
<h3>Add Filiere</h3>
<form method="POST" action="<?php echo e(route('filieres.store')); ?>" enctype="multipart/form-data" >

    <?php echo csrf_field(); ?>
   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" name="name" />
</div>

 <div class="form-group>
    <label for="name" >Description: </label>
    <input type="text" class="form-control" name="description" />
</div>

<button type="submit" class="btn btn-primary" >Add Filiere</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/createf.blade.php ENDPATH**/ ?>