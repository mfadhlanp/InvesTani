<?php $__env->startSection('content'); ?>
<!-- STORE -->
<div id="store" class="col-md-12">
  <!-- store top filter -->
  <div class="store-filter clearfix">
    <!-- <div class="store-sort"> -->
      <!-- <label>
        Sort By:
        <select class="input-select">
          <option value="0">Popular</option>
          <option value="1">Position</option>
        </select>
      </label> -->

      <!-- <label>
        Show:
        <select class="input-select">
          <option value="0">20</option>
          <option value="1">50</option>
        </select>
      </label> -->
    <!-- </div> -->
    <ul class="store-grid">
      <li class="active"><i class="fa fa-th"></i></li>
      <li><a href="<?php echo e(route('proyek.create')); ?>"><i class="fa fa-pencil"></i></a></li>
    </ul>
  </div>
  <!-- /store top filter -->

  <!-- store products -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <?php $__empty_1 = true; $__currentLoopData = $proyek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <!-- product -->
    <div class="col-md-4 col-xs-6">
      <div class="product">
        <div class="product-img">
          <img width="210" height="340" src="<?php echo e(asset('storage/'.$proyek->foto1)); ?>" alt="">
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
          <button class="add-to-cart-btn"><a href="<?php echo e(route('proyek.product', $proyek->id)); ?>"> Investasi </a></button>
        </div>
      </div>
    </div>
    <!-- /product -->

    <div class="clearfix visible-sm visible-xs"></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h3> No Proyek </h3>
    <?php endif; ?>
    
</div>
  </div>
  <!-- /store products -->

  <!-- store bottom filter -->
  <div class="store-filter clearfix">
    <span class="store-qty">Showing 20-100 products</span>
    <ul class="store-pagination">
      <li class="active">1</li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
  </div>
  <!-- /store bottom filter -->
</div>
<!-- /STORE -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>