
<?php $__env->startSection('content'); ?>
<h3>Student Details</h3>
<table style="border:0px;"><tr>

    <td>

        <p><b class="lbl">ID :  </b><?php echo e($student->id); ?></p>
        <p><b class="lbl">Name : </b><?php echo e($student->name); ?></p>
        <p><b class="lbl">Phone : </b><?php echo e($student->email); ?></p>
        <p><b class="lbl">Email : </b><?php echo e($student->phone); ?></p>
        <p><b class="lbl">Section : </b><?php echo e($student->section); ?></p>

    </td>
    <td style="padding-left:150px;">
        <img src="/image/<?php echo e($student->image); ?>" width="128" height = "128"/>
    </td>
    
    
</tr>

</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/show.blade.php ENDPATH**/ ?>