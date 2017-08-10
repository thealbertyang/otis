<?php $__env->startSection('title'); ?>
  Feedback at a Glance
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <img alt="" class="responsive-img materialboxed" src="<?php echo e(asset('/img/training/06.jpg')); ?>">
        </div>
        <!--<div class="col s12 l12">
          <h5>45-Day Feedback Session</h5>

          <p>Interactive assessment with branch/sales manager focused on demonstrated sales competencies areas.</p>
        </div>
        <div class="col s12 l12">
          <h5>120-Day Feedback Session</h5>

          <p>Interactive assessment with branch/sales manager related to sales goals and individual results. Focus will include demonstrated initiative, drive, and quality and timeliness of deliverables.</p>
        </div>
        <div class="col s12 l12">
          <h5>Sales Skills Training &amp; Sales Boot Camp Feedback Sessions</h5>

          <p>At each training session, associates will have scheduled one-on-one discussions with Regional Senior Sales Leader and Regional HR Leader about sales training program progression, readiness for sales territory, geographic locations of interest and mobility and sales career paths</p>
        </div>-->
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.training', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>