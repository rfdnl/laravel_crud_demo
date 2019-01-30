<?php $__env->startSection('content'); ?>
    <h1><?php echo e($name); ?>'s Profile</h1>
    <h2>Email: <?php echo e($email); ?></h2>
    <h2>Gender: <?php echo e($gender); ?></h2>
    <h2>Program: <?php echo e($program); ?></h2>
    <h2>Field: <?php echo e($field); ?></h2>
    <h2>CGPA: <?php echo e($cgpa); ?></h2>

    <form action="/stats" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Stats
                </button>
            </div>
        </div>
    </form>
    <form action="/profile/edit" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Edit
                </button>
            </div>
        </div>
    </form>
    <form action="/profile/edit" method="POST" class="form-horizontal">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('DELETE')); ?>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Delete
                </button>
            </div>
        </div>
    </form>
    <form action="/logout" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Logout
                </button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/basic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>