<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                  </br>
                    <a href="<?php echo e(route('proyek.create')); ?>"> Buat Proyek </a>
                  </br>
                    <a href="<?php echo e(route('proyek.index')); ?>"> Lihat Proyek </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>