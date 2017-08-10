<?php $__env->startSection('title'); ?>
  Becoming an OTIS Superstar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 l12 card">
          <img alt="" class="responsive-img materialboxed" src="<?php echo e(asset('/img/training/success.jpg')); ?>">
        </div>

      <!--
        <div class="col s12 m12 l12 card">
          <p>Are you wondering how to become a superstar employee and exceed your performance goals and expectations? We have a few tips for you. They will help guide your learning efforts and will lead you on the path to a successful career with OTIS!</p>
        </div>  
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12 l6 card">
          <h5>OTIS Competencies</h5>
          <ul>
            <li>Communication</li>
            <li>Customer Focus</li>
            <li>Teamwork</li>
            <li>Listening</li>
            <li>Business Judgement</li>
            <li>Focus on Results</li>
            <li>Ability To Learn &amp; Adapt</li>
          </ul>
        </div>
        <div class="col s12 l6 card">
          <h5>OTIS Superstar</h5>
          <ul>
            <li>Self-motivated</li>
            <li>Competitive &amp; Driven</li>
            <li>Results Oriented</li>
            <li>Desire to Learn</li>
            <li>Leadership Ability</li>
            <li>Problem-solving Skills</li>
            <li>Communication Skills</li>
            <li>Strong Customer Focus</li>
            <li>Able to get your hands dirty</li>
            <li>Team player</li>
          </ul>
        </div>-->
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.training', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>