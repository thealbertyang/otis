    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo e(url('/')); ?>" class="brand-logo left">OTIS</a>
      <ul class="right main-nav hide-on-med-and-down">
      <?php if(Auth::guest()): ?>
      <?php else: ?>
        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('training')); ?>">Training</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="myprofile"><i class="material-icons left">perm_identity</i> <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a></li>
      <?php endif; ?>
      </ul>

      <?php if(Auth::check()): ?>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?php echo e(url('/')); ?>"><i class="material-icons left">dashboard</i> Home</a></li>
        <li><a href="<?php echo e(route('training')); ?>"><i class="material-icons left">stars</i> Training</a></li>
        <li><a href="<?php echo e(route('profile')); ?>"><i class="material-icons left">perm_identity</i> Profile</a></li>
        <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">power_settings_new</i> Logout</a>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">subject</i></a>

      <!-- Dropdown Structure -->
      <ul id='myprofile' class='dropdown-content'>
        <li><a href="<?php echo e(route('profile')); ?>">Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

          </form>
        </li>
      </ul>
      <?php endif; ?>
    </div>
