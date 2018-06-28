<?php $__env->startSection('content'); ?>
    <h3> Cart Investasi </h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th> Nama Proyek </th>
                <th> Investasi </th>
                <th> Keuntungan </th>
                <th> Bukti transfer </th>
                <th> </th>
                <th> Status </th>
                <!-- <th> </th> -->
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($result->nama); ?></td>
                <td> <?php echo e($result->jml_investasi); ?> </td>
                <td> <?php echo e($result->jml_keuntungan); ?> </td>
                <form action="<?php echo e(route('uploadBukti', $result->investasiID)); ?>" method="post" enctype="multipart/form-data" novalidate>
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PATCH')); ?>

                <td> <input type="file" id="bukti" name="bukti" required="required" class="form-control col-md-7 col-xs-12"> </td>
                <input type="hidden" id="status" name="status" value="2">
                <td> <button id="send" type="submit" class="btn btn-success">Checkout</button></td>
                </form>
                <td>
                        <?php
                          
                              if ($result->statusInvestasi == 1)
                                  print "Menunggu bukti transfer";
                              elseif ($result->statusInvestasi == 2)
                              print "Bukti transfer menunggu di konfirmasi";
                              elseif ($result->statusInvestasi == 3)
                              print "Bukti transfer telah di konfirmasi";
                              else
                              print "Proyek selesai, segera cek rekening anda";
                          
                          ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>