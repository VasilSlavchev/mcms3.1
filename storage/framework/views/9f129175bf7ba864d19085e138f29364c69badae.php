<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new tag
        </div>

        <div class="panel-body">
            <form action="<?php echo e(route('tag.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store Tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/admin/tags/create.blade.php ENDPATH**/ ?>