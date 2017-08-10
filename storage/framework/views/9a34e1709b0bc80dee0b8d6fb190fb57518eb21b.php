<?php $__env->startSection('content'); ?>
  <div class="section section-header no-pad" id="index-banner">
    <div class="container-fluid">
      <br><br>
      <div class="row center logo">
        <div class="col m2 offset-m5 s4 offset-s4">
          <img alt="" class="responsive-img" src="<?php echo e(asset('/img/otis-logo.png')); ?>">
        </div>    
      </div>  
        <h1 class="header center orange-text">Sales Trainee</h1>
      <div class="row center">
        <h5 class="sub-header col s12 light">Welcome to <b style="color: #777777;">your</b> sales training program overview.</h5>
      </div>
      <div class="row center">
        <a href="<?php echo e(route('training')); ?>" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section section-toc">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 l3">
        </div>

        <div class="col s12 m12 l6">
          <div class="icon-block">
            <h4 class="center"><i class="material-icons light-blue-text">toc</i> Table of Contents</h4>
          </div>
        </div>

        <div class="col s12 m12 l3">
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l3">
          <div class="icon-block">
            <p class="light">
            </p>
            </div>
        </div>

        <div class="col s12 m12 l6">
          <div class="icon-block">
            <p class="light">

              <ul class="center table-of-contents">
                <?php $__currentLoopData = $trainingLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linkK => $linkV): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(url('training/'.$linkK)); ?>"><?php echo e($trainingLinks[$linkK]); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('profile')); ?>">Badges</a></li>
              </ul>
            </p>
          </div>
        </div>

        <div class="col s12 m12 l3">
          <div class="icon-block">
            <p class="light"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>