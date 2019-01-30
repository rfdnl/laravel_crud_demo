<?php $__env->startSection('content'); ?>
    <h1>Students Hub</h1>
    <div class="form-group">
        <br>
        <form action="/" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <div class="col-sm-6">
                    Email
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-sm-6">
                    Password
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
                </div>
            </div>
        </form>
        <form action="/register" method="GET" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Register
                    </button>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/basic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>