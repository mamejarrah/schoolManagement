
<?php $__env->startSection('content'); ?>
<h3>Add Student</h3>
<form method="POST" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data" >

    <?php echo csrf_field(); ?>
   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" name="name" />
</div> 

<div class="form-group>
    <label for="name" >Email: </label>
    <input type="text" class="form-control" name="email" />
</div> 

<div class="form-group>
    <label for="name" >Phone: </label>
    <input type="text" class="form-control" name="phone" />
</div> 

<div class="form-group>
    <label for="name" >Filieres: 
    <select type="text" class="form-select" name="filieres"  >

        <option value="Developpement">Developpement web</option>
        <option value="informatique">informatique</option>
        <option value="Marketing">Marketing</option>
        <option value="RH">RH</option>
         <option value="Bureautique">Bureautique</option>
          <option value="Infographie">Infographie</option>
        
       
    </select>
    </label>
</div>

<div class="form-group>
    <label for="name" >Image: </label>
    <input type="file" class="form-control" name="image" />
</div>

<button type="submit" class="btn btn-primary" >Add Student</button>



</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/create.blade.php ENDPATH**/ ?>