
<?php $__env->startSection('content'); ?>
<h3>Edit Student</h3>
<form method="POST" action="<?php echo e(route('students.update', $student->id)); ?>" enctype="multipart/form-data" >

    <?php echo method_field('PATCH'); ?> 
            <?php echo csrf_field(); ?>
    
   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name" />
</div> 

<div class="form-group>
    <label for="name" >Email: </label>
    <input type="text" class="form-control" value="<?php echo e($student->email); ?>" name="email" />
</div> 

<div class="form-group>
    <label for="name" >Phone: </label>
    <input type="text" class="form-control" value="<?php echo e($student->phone); ?>"  name="phone" />
</div> 

<div class="form-group>
    <label for="name" >Section: </label>
    <input type="text" class="form-control" value="<?php echo e($student->section); ?>" name="section" />
</div>

<div class="form-group>
    <label for="name" >Image: </label>
    <input type="file" class="form-control" value="<?php echo e($student->image); ?>" name="image" />
     <img src="/image/<?php echo e($student->image); ?>" width="128" height = "128"/>
</div>

<button type="submit" class="btn btn-primary" >Update</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/edit.blade.php ENDPATH**/ ?>