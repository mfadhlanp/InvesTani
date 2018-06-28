<?php $__env->startSection('content'); ?>
<!-- SECTION -->
<div class="section" style="width:1800px; margin:0 auto;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Investasi</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Nama Proyek</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="order-products">
								<div class="order-col">
									<div><?php echo e($result->nama); ?></div>
									<div><?php echo e($result->jml_investasi); ?></div>
								</div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?php echo e($result->jml_investasi); ?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Bank BNI
								</label>
								<div class="caption">
									<p>Maksimal transfer 24 jam</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Bank BRI
								</label>
								<div class="caption">
									<p>Maksimal transfer 24 jam</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Bank Mandiri
								</label>
								<div class="caption">
									<p>Maksimal transfer 24 jam</p>
								</div>
							</div>
						</div>
                        <!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Masukan Nomor Rekening penerima <strong>Investasi</strong></p>
							<form action="<?php echo e(route('cart.checkout', $result->investasiID)); ?>" method="post" novalidate>
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PATCH')); ?>

                            
								<input class="input" name="no_rekening" id="no_rekening" type="text" placeholder="Rekening penerima investasi">
					
						</div>
					</div>
                    <input type="hidden" id="status" name="status" value="1">
				</div>
						<!-- <div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div> -->
						<button id="send" style="width:200px; margin:0 auto;" type="submit" class="primary-btn order-submit">Checkout</button>
					</div>
					</form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>