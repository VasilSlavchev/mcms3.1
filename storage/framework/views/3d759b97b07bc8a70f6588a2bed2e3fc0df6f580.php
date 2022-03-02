<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Settings
        </div>

        <div class="panel-body">
            <form action="<?php echo e(route('settings.update')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="site_name">Site name</label>
                    <input type="text" name="site_name" class="form-control" value="<?php echo e($settings->site_name); ?>">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo e($settings->address); ?>">
                </div>
                <div class="form-group">
                    <label for="contact_number">Phone</label>
                    <input type="text" name="contact_number" class="form-control" value="<?php echo e($settings->contact_number); ?>">
                </div>
                <div class="form-group">
                    <label for="contact_email">Contact email</label>
                    <input type="text" name="contact_email" class="form-control" value="<?php echo e($settings->contact_email); ?>">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update settings
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/admin/settings/settings.blade.php ENDPATH**/ ?>