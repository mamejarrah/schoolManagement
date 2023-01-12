
<?php $__env->startSection('content'); ?>
<h3>Student list</h3>


<div class="table-wrapper">

    <table class="fl-table">

    <thead><tr>

        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Filieres</th>
        <th>Image</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>


    </tr> </thead>

    <tbody>
        <?php $__currentLoopData = $mark_students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td><?php echo e($student->phone); ?></td>
            <th><?php echo e($student->filieres); ?></th>
            <td><img src="/image/<?php echo e($student->image); ?>" width="96" height="96" /></td>

        <td>
            <form method="POST">
                <a class="btn btn-info" href="<?php echo e(route('students.show', $student->id)); ?>">Show</a>

            </form>
        </td>

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="<?php echo e(route('students.edit', $student->id)); ?>">Edit</a>

            </form>
        </td>


            <td>
                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="post">
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/indexliste3.blade.php ENDPATH**/ ?>