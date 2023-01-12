<?php $__env->startSection('content'); ?>
<h3>Filiere List</h3>
<div class="table-wrapper">

    <table class="fl-table">

    <thead><tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr> </thead>

    <tbody>
        <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($filiere->id); ?></td>
            <td><?php echo e($filiere->name); ?></td>
            <td><?php echo e($filiere->description); ?></td>

      
        

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="<?php echo e(route('filieres.edit', $filiere->id)); ?>">Edit</a>

            </form>
        </td>

            
            <td>
                <form action="<?php echo e(route('filieres.destroy', $filiere->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>



        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

    </table>


</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/indexf.blade.php ENDPATH**/ ?>