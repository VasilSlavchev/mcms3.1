<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <h1 class="text-center text-success">Welcome to mCMS 3.1 dashboard :)!</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Published posts:
            </div>
            <div class="panel-body text-success">
               <h4> <?php echo e($posts_count); ?></h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Trashed posts:
            </div>
            <div class="panel-body text-center text-danger">
                <h4><?php echo e($trashed_count); ?></h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Users:
            </div>
            <div class="panel-body text-info">
            <h4><?php echo e($users_count); ?></h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Categories:
            </div>
            <div class="panel-body text-center text-primary">
            <h4><?php echo e($categories_count); ?></h4> 
            </div>
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/home.blade.php ENDPATH**/ ?>