<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header">
            <?php echo e(isset($category) ? 'Edit category' : 'Create category'); ?>

        </div>
        <div class="card-body">
            <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(isset($category) ? route('categories.update', $category->id) : route('categories.store')); ?>"
                  method="POST">
                <?php echo csrf_field(); ?>
                <?php if(isset($category)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <div class="form-group">
                    <label for="name">Category name:</label>
                    <input type="text" class="form-control" name="name" id="name"
                           value="<?php echo e(isset($category) ? $category->name : ''); ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">
                        <?php echo e(isset($category) ? 'Update category' : 'Create  category'); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/categories/create.blade.php ENDPATH**/ ?>