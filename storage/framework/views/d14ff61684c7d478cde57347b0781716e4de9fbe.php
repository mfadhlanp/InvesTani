<style>
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}
</style>

<?php $__env->startSection('content'); ?>
    <h3> Cart Investasi </h3>
    <table class="table table-hover">
        <thead>
            <tr>
            <th> Nama User </th>
                <th> Nama Proyek </th>
                <th> Investasi </th>
                <th> Keuntungan </th>
                <!-- <th> </th> -->
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td> <?php echo e($result->name); ?></td>
                <td> <?php echo e($result->nama); ?></td>
                <td> <?php echo e($result->jml_investasi); ?> </td>
                <td> <?php echo e($result->jml_keuntungan); ?> </td>
                <td>
                <img src="<?php echo e(asset('storage/'.$result->konfirmasi)); ?>" alt="">
                </td>
                <form action="<?php echo e(route('admin.ubahKonfirmasi', $result->investasiID)); ?>" method="post" novalidate>
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PATCH')); ?>

                                <input type="hidden" id="status" name="status" value="3">
                <td> <button id="send" type="submit" class="btn btn-success">Konfirmasi</button></td>
                </form>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>