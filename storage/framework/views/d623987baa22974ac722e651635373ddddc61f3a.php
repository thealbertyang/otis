<?php if(isset($dataTypeContent->id)): ?>
    <?php $__env->startSection('page_title','Edit '.$dataType->display_name_singular); ?>
<?php else: ?>
    <?php $__env->startSection('page_title','Add '.$dataType->display_name_singular); ?>
<?php endif; ?>

<?php $__env->startSection('css'); ?>
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_header'); ?>
    <h1 class="page-title">
        <i class="<?php echo e($dataType->icon); ?>"></i> <?php if(isset($dataTypeContent->id)): ?><?php echo e('Edit'); ?><?php else: ?><?php echo e('New'); ?><?php endif; ?> <?php echo e($dataType->display_name_singular); ?>

    </h1>
    <?php echo $__env->make('voyager::multilingual.language-selector', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="<?php if(isset($dataTypeContent->id)): ?><?php echo e(route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id)); ?><?php else: ?><?php echo e(route('voyager.'.$dataType->slug.'.store')); ?><?php endif; ?>" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            <?php if(isset($dataTypeContent->id)): ?>
                <?php echo e(method_field("PUT")); ?>

            <?php endif; ?>
            <?php echo e(csrf_field()); ?>


            <div class="row">
                <div class="col-md-12">
                    <!-- ### TITLE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Program Details
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">                            
                            <div class="form-group">
                                <label for="name">Title</label>
                                <?php echo $__env->make('voyager::multilingual.input-hidden', [
                                    '_field_name'  => 'title',
                                    '_field_trans' => get_field_translations($dataTypeContent, 'title')
                                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php if(isset($dataTypeContent->title)): ?><?php echo e($dataTypeContent->title); ?><?php endif; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Training Program</label>
                                <?php echo $__env->make('voyager::multilingual.input-hidden', [
                                    '_field_name'  => 'training_class_id',
                                    '_field_trans' => get_field_translations($dataTypeContent, 'training_class_id')
                                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo Form::select('training_class_id', \App\CreatedTrainingClass::pluck('title','id'), $dataTypeContent->training_class_id, ['class' => '']); ?>

                            </div>
                            <div class="form-group">
                                <label for="name">Program Status</label>
                                <select class="" name="status">
                                    <option value="active" <?php if(isset($dataTypeContent->status) && $dataTypeContent->status == 'active'): ?><?php echo e('selected="selected"'); ?><?php endif; ?>>Active</option>
                                    <option value="inactive" <?php if(isset($dataTypeContent->status) && $dataTypeContent->status == 'inactive'): ?><?php echo e('selected="selected"'); ?><?php endif; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- ### TITLE ### -->
                    <div class="panel panel-bordered panel-warning">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Program Participants
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">       
                            <?php 
                                if(Route::currentRouteName() == 'voyager.training-classes.edit'){
                                    $users = \App\User::where("training_class_id",$dataTypeContent->id)->get(); 
                                    $usersId = [];

                                    foreach($users as $user){
                                        $usersId[] = $user['id'];
                                    }

                                    $usersId = json_encode($usersId);
                                }

                                else if(Route::currentRouteName() == 'voyager.training-classes.create'){
                                    $users = []; 
                                    $usersId = [];

                                    $usersId = json_encode($usersId);
                                }


                            ?>                     
                            <div class="form-group">
                                <label for="participants">Select Participants</label>
                                <?php echo $__env->make('voyager::multilingual.input-hidden', [
                                    '_field_name'  => 'title',
                                    '_field_trans' => get_field_translations($dataTypeContent, 'title')
                                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <input type="hidden" class="form-control" id="participants" name="participants" value="<?php if($usersId): ?><?php echo e($usersId); ?><?php endif; ?>">
                                <input type="hidden" class="form-control" id="remove_participants" name="remove_participants" value="[]">
                                <select class="input-participants" placeholder="Select a user to add.">
                                </select>
                            </div>
                            <table class="table table-participants">
                                <thead>
                                    <th>User</th>
                                    <th class="actions">Actions</th>
                                </thead>
                                <tbody>
                                    
                                    <?php if(isset($users)): ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr data-id="<?php echo e($user['id']); ?>"><td><?php echo e($user['name']); ?></td><td><a href="#" class="btn-sm btn-danger pull-left delete"><i class="voyager-trash"></i> Delete </a></td></tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr class="table-participants-none"><td>No Users Added.</td><td></td></tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">
                <?php if(isset($dataTypeContent->id)): ?><?php echo e('Update Class'); ?><?php else: ?> <i class="icon wb-plus-circle"></i> Create New Class <?php endif; ?>
            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="<?php echo e(route('voyager.upload')); ?>" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            <?php echo e(csrf_field()); ?>

            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="<?php echo e($dataType->slug); ?>">
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

    <script>
        $('document').ready(function () {
            $('#slug').slugify();

        <?php if($isModelTranslatable): ?>
            $('.side-body').multilingual({"editing": true});
        <?php endif; ?>
        });



        $('.input-participants').selectize({
            valueField: 'id',
            labelField: 'name',
            searchField: 'name',
            placeholder: 'Select a user to add.',
            allowEmptyOption: true,
            preload: true,
            create: false,
            render: {
                option: function(item, escape) {
                    //console.log(item);
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="name"><b>+ADD</b> ' + escape(item.name) + '</span>' +
                        '</span>' +
                    '</div>';
                }
            },
            load: function(query, callback) {
                $.ajax({
                    url: 'http://careerexa.com/otis/admin/ajax/listUsers',
                    type: 'GET',
                    dataType: 'json',
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res);
                    }
                });
            },
            onChange: function(value, $item) {
                    if($('.table-participants tbody .table-participants-none')){
                        $('.table-participants tbody .table-participants-none').remove();
                    }

                    var id = this.options[value].id;
                    var name = this.options[value].name;
                    
                    
                    $('.table-participants tbody').append('<tr data-id='+ id +'><td>'+ name +'</td><td><a href="#" class="btn-sm btn-danger pull-left delete"><i class="voyager-trash"></i> Delete </a></td></tr>');

                    //console.log(this);

                    var participants = JSON.parse($('input[name=participants]').val());
                    participants = participants.concat([id]);

                    var participants = JSON.stringify(participants);
                    $('input[name=participants]').val(participants);


                    $('.table-participants tbody .delete').click(function(){
                        console.log("delete2");
                        var removeItem = $(this).closest('tr').attr('data-id');

                        var participants = JSON.parse($('input[name=participants]').val());
                        var new_participants = jQuery.grep(participants, function(value) {
                          return (value != removeItem);
                        });

                        new_participants = JSON.stringify(new_participants);
                        $('input[name=participants]').val(new_participants);

                        //Remove this row and also from hidden
                        $(this).closest('tr').remove();
                    });

                    if(value !== 0){
                            $(this)[0].removeOption(value);
                            $(this)[0].removeItem(value);
                        
                            $(this)[0].refreshItems();
                            $(this)[0].refreshOptions();
                    }
            }
        });

        $('.table-participants tbody .delete').click(function(){
                //console.log("delete");
                var removeItem = $(this).closest('tr').attr('data-id');

                var participants = JSON.parse($('input[name=participants]').val());
                var new_participants = jQuery.grep(participants, function(value) {
                  return (value != removeItem);
                });

                var remove_participants = JSON.parse($('input[name=remove_participants]').val());
                var new_remove_participants = jQuery.grep(participants, function(value) {
                  return (value == removeItem);
                });

                new_remove_participants = new_remove_participants.concat(remove_participants);

                console.log("concat: "+new_remove_participants.concat(remove_participants));

                console.log("removeItem: "+removeItem);
                console.log("newParticipants: "+new_participants);
                console.log("newRemoveParticipants: "+new_remove_participants);

                new_participants = JSON.stringify(new_participants);
                $('input[name=participants]').val(new_participants);

                new_remove_participants = JSON.stringify(new_remove_participants);
                $('input[name=remove_participants]').val(new_remove_participants);

                //Remove this row and also from hidden
                $(this).closest('tr').remove();
        });
    </script>
    <?php if($isModelTranslatable): ?>
        <script src="<?php echo e(voyager_asset('js/multilingual.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(voyager_asset('lib/js/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(voyager_asset('js/voyager_tinymce.js')); ?>"></script>
    <script src="<?php echo e(voyager_asset('js/slugify.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>