<?php $__env->startSection('content'); ?>
<?php  
$form = [];
$form['office-org-chart'] = isset(json_decode(Auth::user()->awards, TRUE)['office-org-chart']) ? json_decode(Auth::user()->awards, TRUE)['office-org-chart'] : '';
$form['regional-org-chart'] = isset(json_decode(Auth::user()->awards, TRUE)['regional-org-chart']) ? json_decode(Auth::user()->awards, TRUE)['regional-org-chart'] : '';
$form['office-list'] = isset(json_decode(Auth::user()->awards, TRUE)['office-list']) ? json_decode(Auth::user()->awards, TRUE)['office-list'] : '';
$form['regional-list'] = isset(json_decode(Auth::user()->awards, TRUE)['regional-list']) ? json_decode(Auth::user()->awards, TRUE)['regional-list'] : '';

 ?>
      <?php  

        $userBadges = Auth::user()->users_badges;


       ?>
  <div class="section section-profile no-pad-bot " id="index-banner">
    <div class="container-fluid">
      <br><br>
      <div class="row center">
        <div class="col m2 offset-m5 s4 offset-s4">
          <img alt="" class="avatar circle responsive-img" src="<?php echo e(asset('/storage/'.Auth::user()->avatar)); ?>">
        </div>
      </div>
      <h1 class="header center"><?php echo e(Auth::user()->name); ?></h1>
      <br><br>
    </div>
    <div class="container-fluid badges-points">
      <div class="row center">
        <div class="col s0 m3">
        </div>
        <div class="col s6 m3">
            <h4>Points</h4>
            <h3 class="points"><?php  $points = 0; foreach(\App\UserBadge::all() as $badges){  foreach($userBadges as $badge)  if($badges->id == $badge->id) { $points = $points + $badges->points; } } echo $points;  ?></h3>
        </div>
        <div class="col s6 m3">
            <h4>Badges</h4>
            <h3 class="badges"><?php  $count = 0; foreach(\App\UserBadge::all() as $badges){  foreach($userBadges as $badge)  if($badges->id == $badge->id) { $count++; } } echo $count;  ?></h3>
        </div>
        <div class="col s0 m3">
        </div>
      </div>
    </div>
  </div>

  <div class="section section-badges">
    <div class="container">
      <div class="row badges-desc">
        <div class="col s12">
          <p><b>Earn:</b>  Some badges earn points.  All earn bragging rights. <br/></p>
          <p><b>Points:</b>  Take action, points are automatically accumulated as you complete networking activities.  Hitting point thresholds = cool Otis gear! <br/></p>
          <p><b>Collect:</b>  Watch your collection grow with badges as you master networking and relationship building throughout the organization. <br/></p>
        </div>
      </div>

      <!--   Icon Section   -->
      <div class="row">
        <?php $__currentLoopData = \App\UserBadge::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badges): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col s6 m4">
          <div class="card <?php  $count = 0; foreach($userBadges as $badge)  if($badges->id == $badge->id) { $count++; } if($count > 0){ echo 'active'; } else { echo 'inactive'; }  ?>">
            <div class="card-image">
              <img src="<?php echo e(asset($badges->file_path)); ?>" class="svg">
              <span class="card-title black-text center"></span>
            </div>
            <div class="card-action">
              <h5 class="center-align"><?php echo e($badges->title); ?></h5>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>