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
                        <th>Nama Proyek</th>
                        <th>Daftar Investor</th>
                        <th>Bukti transfer</th>
                        <th>action</th>
                        <th>status</th>
                      </tr>
                    </thead>
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                      <tr>
                        
                        <td><?php echo e($proyek->nama); ?></td>
                        <td> 
                        <button id="send" type="submit" class="btn btn-info"><a href="<?php echo e(route('proyek.listInvestor', $proyek->id)); ?>">Lihat daftar Investor</a></button>
                        <button id="send" type="submit" class="btn btn-info"><a href="<?php echo e(route('proyek.editProyek', $proyek->id)); ?>">Edit Proyek</a></button>
                        </td>
                        <form action="<?php echo e(route('proyek.uploadBukti', $proyek->id)); ?>" method="post" enctype="multipart/form-data" novalidate>
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>

                        <td> <input type="file" id="bukti" name="bukti" required="required" class="form-control col-md-7 col-xs-12"> </td>
                        <input type="hidden" id="status" name="status" value="1">
                        <td> <button id="send" type="submit" class="btn btn-success">Upload bukti transfer</button></td>
                        </form>
                        
                        <td> 
                        <?php
                          
                              if ($proyek->status == 2)
                                  print "Proyek selesai";
                              elseif ($proyek->status == 1)
                              print "Bukti Transfer di Konfirmasi";
                              else
                              print "Proyek berjalan";
                          
                          ?>
                         
                            <!-- <input id="myInput" type="hidden" value ="<?php echo e($proyek->status); ?>">
                            <button onclick="myFunction()">Try it</button>
                            <p id="demo"></p> -->
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
<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>