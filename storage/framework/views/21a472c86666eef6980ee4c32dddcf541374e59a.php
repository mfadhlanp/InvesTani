<?php $__env->startSection('content'); ?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Nama Proyek</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <?php $__currentLoopData = $proyek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                      <tr>
                        <td><?php echo e($proyek->name); ?></td>
                        <td><?php echo e($proyek->nama); ?></td>
                        <td><?php echo e($proyek->deskripsi); ?></td>
                        <td><?php echo e($proyek->lokasi); ?></td>
                        <td>
                        <form action="<?php echo e(route('admin.proyekSelesai', $proyek->proyekID)); ?>" method="post" novalidate>
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PATCH')); ?>

                                <input type="hidden" id="status" name="status" value="2">
                          <button id="send" type="submit" class="btn btn-info">Selesai</button>
                          </form>
                          <form action="<?php echo e(route('admin.deleteProyek', $proyek->proyekID)); ?>" method="post" novalidate>
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                          <button id="send" type="submit"  class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>