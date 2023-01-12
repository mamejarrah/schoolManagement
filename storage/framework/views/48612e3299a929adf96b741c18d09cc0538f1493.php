<?php $__env->startSection('content'); ?>
<table border="0" style="width:800px; margin:50px;">


    <tr>

        <td>

            <img src="img/student.jpg" height="175" width="175" >
            <p><b>Manage Students</b> </p>
        </td>

        <td>

            <img src="img/faculty.jpg" height="175" width="175" >
            <p><b>Manage Filieres</b> </p>
        </td>
        <td>

            <img src="img/teacher.png" height="175" width="175">
            <p><b>Manage Teachers</b> </p>
        </td>
    </tr>
        
    <tr>
        <td>

            <img src="img/library.png" height="175" width="175">
            <p><b>Manage Libaries</b> </p>
        </td>
        <td>

            <img src="img/administrator.png" height="175" width="175">
            <p><b>Manage Administrators</b> </p>
        </td>

        </tr>



</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\schoolManagement\resources\views/home.blade.php ENDPATH**/ ?>