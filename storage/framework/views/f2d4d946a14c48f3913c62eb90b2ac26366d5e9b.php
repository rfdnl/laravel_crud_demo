<?php $__env->startSection('content'); ?>
<h1>Register</h1>
    <div class="form-group">
        <br>
        <form action="/profile/edit" method="POST" class="form-horizontal">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <div class="col-sm-6">
                        Program
                        <select name="program"  class="form-control">
                            <option value="0">Foundation</option>
                            <option value="1">Diploma</option>
                            <option value="2">Degree</option>
                            <option value="3">Masters</option>
                            <option value="4">PhD</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        Field
                        <select name="field"  class="form-control">
                            <option value="0">Mathematics</option>
                            <option value="1">Physics</option>
                            <option value="2">Engineering</option>
                            <option value="3">Chemistry</option>
                            <option value="4">Biology</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        CGPA
                        <input type="number" step="0.01" name="cgpa" class="form-control" value="<?php echo e($cgpa); ?>" min="0" max="4">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Done
                        </button>
                    </div>
                </div>
            </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/basic', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>