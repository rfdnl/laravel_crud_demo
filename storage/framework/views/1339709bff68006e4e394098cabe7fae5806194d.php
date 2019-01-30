<?php $__env->startSection('content'); ?>
    <h1>STATS</h1>
    <h2>Total: <?php echo e($total); ?></h2>
    <h2>Male: <?php echo e($totalMale); ?></h2>
    <h2>Female: <?php echo e($totalFemale); ?></h2>
    <br>
    <h2>Foundation: <?php echo e($totalFoundation); ?></h2>
    <h2>Diploma: <?php echo e($totalDiploma); ?></h2>
    <h2>Degree: <?php echo e($totalDegree); ?></h2>
    <h2>Masters: <?php echo e($totalMasters); ?></h2>
    <h2>PhD: <?php echo e($totalPhD); ?></h2>
    <br>
    <h2>Mathematics: <?php echo e($totalMaths); ?></h2>
    <h2>Physics: <?php echo e($totalPhysics); ?></h2>
    <h2>Engineering: <?php echo e($totalEngine); ?></h2>
    <h2>Chemistry: <?php echo e($totalChemistry); ?></h2>
    <h2>Biology: <?php echo e($totalBiology); ?></h2>

    <form action="/profile" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> My Profile
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