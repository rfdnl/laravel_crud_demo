<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Students Hub</title>
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>
        <!-- Display Validation Errors -->
        
        <div class="panel-body">
            <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php if(Session::has('message')): ?>
            <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>