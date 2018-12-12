<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-3">
            <p class="lead">Shop Categories</p>
            <div class="list-group">
              <a href="#" class="list-group-item">Printable</a>
              <a href="#" class="list-group-item">Cupcake wrappers</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row" style="margin-bottom:30px;">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img alt="First slide" src="http://placehold.it/800x200" style="width: 100%;">
                          </div>
                          <div class="item">
                            <img alt="Second slide" src="http://placehold.it/800x200" style="width: 100%;">
                          </div>
                          <div class="item">
                            <img alt="Third slide" src="http://placehold.it/800x200" style="width: 100%;">
                          </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <img src="http://placehold.it/320x120" alt="">
                    <div class="caption">
                        <h4 class="pull-right">$<?php echo e(number_format($product->pricing, 2);); ?></h4>
                        <h4><a href="<?php echo e(url('products/'.$product->id)); ?>"><?php echo e($product->name); ?></a></h4>
                        <p><?php echo e($product->short_description); ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right"><?php echo e($product->rating_count); ?> <?php echo e(Str::plural('review', $product->rating_count);); ?></p>
                        <p>
                            <?php for($i=1; $i <= 5 ; $i++): ?>
                                <span class="glyphicon glyphicon-star<?php echo e(($i <= $product->rating_cache) ? '' : '-empty'); ?>"></span>
                            <?php endfor; ?>
                        </p>
                    </div>
                  </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>