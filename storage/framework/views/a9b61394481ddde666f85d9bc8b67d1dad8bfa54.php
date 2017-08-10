<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">
        <nav class="light-blue lighten-1" role="navigation">
            <?php echo $__env->make('includes.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </nav>

        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="section section-training">
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>

                <div class="divider"></div>

                <?php echo $__env->make('training.pagination', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        

    </div>

    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.footer-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
