<?php $__env->startSection('content'); ?>
<?php  
$form = [];
$form['office-org-chart'] = isset(json_decode(Auth::user()->awards, TRUE)['office-org-chart']) ? json_decode(Auth::user()->awards, TRUE)['office-org-chart'] : '';
$form['regional-org-chart'] = isset(json_decode(Auth::user()->awards, TRUE)['regional-org-chart']) ? json_decode(Auth::user()->awards, TRUE)['regional-org-chart'] : '';
$form['office-list'] = isset(json_decode(Auth::user()->awards, TRUE)['office-list']) ? json_decode(Auth::user()->awards, TRUE)['office-list'] : '';
$form['regional-list'] = isset(json_decode(Auth::user()->awards, TRUE)['regional-list']) ? json_decode(Auth::user()->awards, TRUE)['regional-list'] : '';

//isset($stopForms) ? ($forms = $stopForms ? false : true) : ($forms = true);



$forms = false;
$forms2 = true;
 ?>



	   	<?php if($forms2): ?>
	   	<form method="POST" action="<?php echo e(Request::url()); ?>" class="row form-office-list grey lighten-5 padding-large">  
	   	<?php echo e(csrf_field()); ?>

	   	<input type="hidden" name="form_type" value="office_list">
	   	<input type="hidden" name="totalCount" value="<?php echo e(isset($form['office-list']['totalCount']) ? $form['office-list']['totalCount'] : 0); ?>">
	        <div class="col s12 m12 l12">

	        	<h5 class="center-align"><b>List Names From Your Office Support</b></h5>
	        	<div class="divider mobile-margin-bottom"></div>
   
	        	<div class="col s12 m12 l4 mobile-margin-bottom">
	        		<div class="col s12 center-align">
	        			<img alt="" class="responsive-img circle white" src="<?php echo e(asset('/img/training/image005.png')); ?>" width=167px height=167px>
	        			<h5 class="center-align position-title">Sales Rep</h5>
	        		</div>

	        		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][0]) ? $form['office-list']['list_sales_rep'][0] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][1]) ? $form['office-list']['list_sales_rep'][1] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][2]) ? $form['office-list']['list_sales_rep'][2] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][3]) ? $form['office-list']['list_sales_rep'][3] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][4]) ? $form['office-list']['list_sales_rep'][4] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][5]) ? $form['office-list']['list_sales_rep'][5] : ''); ?>">
	          		<input type="text" name="list_sales_rep[]" value="<?php echo e(isset($form['office-list']['list_sales_rep'][6]) ? $form['office-list']['list_sales_rep'][6] : ''); ?>">
	        	</div>
	        	<div class="col s12 m12 l4 mobile-margin-bottom">
	        		<div class="col s12 center-align">
	        			<img alt="" class="responsive-img circle white" src="<?php echo e(asset('/img/training/image004.png')); ?>" width=167px height=167px>
	        			<h5 class="center-align position-title">Field Supervisors</h5>
	        		</div>

	        		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][0]) ? $form['office-list']['list_field_supervisors'][0] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][1]) ? $form['office-list']['list_field_supervisors'][1] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][2]) ? $form['office-list']['list_field_supervisors'][2] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][3]) ? $form['office-list']['list_field_supervisors'][3] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][4]) ? $form['office-list']['list_field_supervisors'][4] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][5]) ? $form['office-list']['list_field_supervisors'][5] : ''); ?>">
	          		<input type="text" name="list_field_supervisors[]" value="<?php echo e(isset($form['office-list']['list_field_supervisors'][6]) ? $form['office-list']['list_field_supervisors'][6] : ''); ?>">

	        	</div>
	        	<div class="col s12 m12 l4 mobile-margin-bottom">
	        		<div class="col s12 center-align">
	        			<img alt="" class="responsive-img circle white" src="<?php echo e(asset('/img/training/image007.png')); ?>" width=167px height=167px>
	        			<h5 class="center-align position-title">Field Mechanics</h5>
	        		</div>
	          		
	        		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][0]) ? $form['office-list']['list_field_mechanics'][0] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][1]) ? $form['office-list']['list_field_mechanics'][1] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][2]) ? $form['office-list']['list_field_mechanics'][2] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][3]) ? $form['office-list']['list_field_mechanics'][3] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][4]) ? $form['office-list']['list_field_mechanics'][4] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][5]) ? $form['office-list']['list_field_mechanics'][5] : ''); ?>">
	          		<input type="text" name="list_field_mechanics[]" value="<?php echo e(isset($form['office-list']['list_field_mechanics'][6]) ? $form['office-list']['list_field_mechanics'][6] : ''); ?>">
	        	</div>
	    	</div>
	    </form>
		<?php endif; ?>

		<div class="divider large"></div>



	    <?php if($forms2): ?>
	    <form method="POST" action="<?php echo e(Request::url()); ?>" class="row form-regional-list grey lighten-5 padding-large">  
	   	<?php echo e(csrf_field()); ?>

	   	<input type="hidden" name="form_type" value="regional_list">
	   	<input type="hidden" name="totalCount" value="<?php echo e(isset($form['regional-list']['totalCount']) ? $form['regional-list']['totalCount'] : 0); ?>">
	        <div class="col s12 m12 l12">

	        <h5 class="center-align"><b>Other Members Of Your Support Network</b></h5>
	        <div class="divider mobile-margin-bottom"></div>

	        	<div class="col s12 m12 l12 mobile-margin-bottom">
	        		<div class="col s12 center-align">
	        			<img alt="" class="responsive-img circle white" src="<?php echo e(asset('/img/training/image012.jpg')); ?>" width=167px height=167px>
	        		</div>
	        		
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][0]) ? $form['regional-list']['list_regional_members'][0] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][1]) ? $form['regional-list']['list_regional_members'][1] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][2]) ? $form['regional-list']['list_regional_members'][2] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][3]) ? $form['regional-list']['list_regional_members'][3] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][4]) ? $form['regional-list']['list_regional_members'][4] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][5]) ? $form['regional-list']['list_regional_members'][5] : ''); ?>">
	          		<input type="text" name="list_regional_members[]" value="<?php echo e(isset($form['regional-list']['list_regional_members'][6]) ? $form['regional-list']['list_regional_members'][6] : ''); ?>">
	          		
	        	</div>

	    	</div>
	   	</form>
	   	<div class="divider white large"></div>
	    <?php endif; ?>
	   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.training', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>