<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Image
                </th>
                <th>
                    Name
                </th>
                <th>
                    Permissions
                </th>
                <th>
                    Delete
                </th>
                </thead>

                <tbody>
                <?php if($users->count() > 0): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset($user->profile->avatar)); ?>" alt="" width="60px" height="60px" style="border-radius: 50%;">
                            </td>
                            <td>
                                <?php echo e($user->name); ?>

                            </td>
                            <td>
                                <?php if($user->admin): ?>
                                    <a href="<?php echo e(route('user.not.admin', ['id' => $user->id])); ?>" class="btn btn-xs btn-danger">Remove permissions</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('user.admin', ['id' => $user->id])); ?>" class="btn btn-xs btn-success">Make admin</a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if(Auth::id() !== $user->id): ?>
                                    <a href="<?php echo e(route('user.delete', ['id' => $user->id])); ?>" class="btn btn-xs btn-danger">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <th colspan="5" class="text-center">No users</th>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\jft\resources\views/admin/users/index.blade.php ENDPATH**/ ?>