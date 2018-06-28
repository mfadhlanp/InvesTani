<?php $__env->startSection('content'); ?>
    <h3> Cart Investasi </h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th> Nama Proyek </th>
                <th> Investasi </th>
                <th> Keuntungan </th>
                <!-- <th> </th> -->
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($result->nama); ?></td>
                <td> <?php echo e($result->jml_investasi); ?> </td>
                <td> <?php echo e($result->jml_keuntungan); ?> </td>
                <td> <button id="send" type="submit" class="btn btn-success"><a href="<?php echo e(route('cart.shipping', $result->investasiID)); ?>">Checkout</a></button></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>