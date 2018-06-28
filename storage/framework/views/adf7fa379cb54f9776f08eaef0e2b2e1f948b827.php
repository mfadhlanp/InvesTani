<?php $__env->startSection('content'); ?>
<div id="hot-deal" class="section">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>Daftar</h3>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>Cari</h3>
                                <span>Proyek</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4>Investasi</h4>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4>Pantau
                                    dan
                                    Tunggu</h4>
                                <span>Hasilnya</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">investasi pertanian mudah dan nyaman</h2>
                    <p>yuk mulai berinvestasi di bidang pertanian!</p>
                    <a class="primary-btn cta-btn" href="<?php echo e(route('proyek.index')); ?>">Investasi Sekarang</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</div>
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Proyek Tersedia</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <?php $__empty_1 = true; $__currentLoopData = $proyek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!-- product -->
                                    <div class="col-md-3 col-xs-6">
                                    <div class="product">
                                        <div class="product-img">
                                            <img width="200" height="250" src="<?php echo e(asset('storage/'.$proyek->foto1)); ?>" alt="">
                                            <div class="product-label">
                                                <span class="new">
                                                    <?php if($proyek->category_id === 1): ?>
                                                    Tanah
                                                    <?php else: ?>
                                                    Proyek
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Target : Rp. <?php echo e($proyek->target_investasi); ?></p>
                                            <h3 class="product-name"><a href="#"> <?php echo e($proyek->nama); ?> </a></h3>
                                            <h4 class="product-price">Mulai Dari : Rp. <?php echo e($proyek->min_investasi); ?></h4>
                                            <div class="product-rating">
                                                    <i><?php echo e($proyek->deadline); ?></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><a href="<?php echo e(route('proyek.product', $proyek->id)); ?>">Investasi</a></button>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /product -->
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="section">
        <div id="hot-deal" class="hot-deal">
                <a class="primary-btn cta-btn" href="<?php echo e(route('proyek.index')); ?>">Proyek Lainnya</a>
        </div>
    </div>
    <!-- /SECTION -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>