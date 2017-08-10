<?php $__env->startSection('title'); ?>
  Welcome to Otis Elevator Company!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <p>You are about to embark on a journey that starts your career in the elevator industry, and we are excited that you have joined our sales team.  This training program has been designed to provide you with foundational elevator industry knowledge, coupled with key sales skills development that will prepare you to be a sales rock star!</p>
          <img alt="" class="responsive-img img-float right" src="<?php echo e(asset('/img/training/01.jpg')); ?>">
          <p>This site should be used in conjunction with your sales training to enhance your learning experience. Use this site throughout your training as a working reference as you take small steps forward each week. Aside from providing tips, guidelines and resources for you while you are training as a Sales Trainee you can use it daily to jot notes in it. By the end of the training period, you will have a comprehensive knowledge of Otis and its products. This knowledge will lay the foundation for your success in a service sales role.</p>

          <p>You’ve got the talent. We’re committed to showing you the career tracks and opportunities that await you!</p>
        </div>
        <div class="col s6">

        
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12 m4 card">
          <h5>FOUNDATIONAL KNOWLEDGE</h5>
          <ol>
            <li>Knowledge of elevator industry</li>
            <li>Introduction and understanding of Otis Americas organizational structure</li>
            <li>Knowledge of products and services offered</li>
          </ol>
        </div>
        <div class="col s12 m4 card">
          <h5>SALES SKILLS</h5>
          <ol>
            <li>Develop customer service and account management</li>
            <li>Master negotiation skills and how to sell maintenance contracts</li>
            <li>Strong emphasis on account management vs. cold calling</li>
            <li>Teambuilding and networking opportunities</li>
          </ol>
        </div>
        <div class="col s12 m4 card">
          <h5>BENEFITS AT A GLANCE</h5>
          <ol>
            <li>Personalized training schedule, comprehensive feedback, early sales goals, and exposure to sales responsibilities while training</li>
            <li>You will often be out visiting customers and meeting people, with limited time devoted behind a desk during the week</li>
            <li>You design your work schedule! You have accountability &amp; control over developing relationships, setting meetings and enhancing your skills and technical knowledge</li>
          </ol>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.training', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>