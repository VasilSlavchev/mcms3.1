<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end mb-2">
  <a href="<?php echo e(route('category.create')); ?>" class="btn btn-success">Add Category</a>
</div>

      <div class="panel panel-default">
            <div class="panel-heading">
                  Categories
            </div>
            <div class="panel-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Category name
                              </th>
                              <th>
                                    Editing
                              </th>
                              <th>
                                    Deleting
                              </th>
                        </thead>

                        <tbody>
                              <?php if($categories->count() > 0): ?>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                                <td>
                                                      <?php echo e($category->name); ?>

                                                </td>
                                                <td>
                                                      <a href="<?php echo e(route('category.edit', ['id' => $category->id ])); ?>" class="btn btn-xs btn-info">
                                                            Edit
                                                      </a>
                                                </td>

                                                <td>
                                                      <a href="<?php echo e(route('category.delete', ['id' => $category->id ])); ?>" class="btn btn-xs btn-danger">
                                                            Delete
                                                      </a>
                                                </td>
                                          </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?>
                                     <tr>
                                          <th colspan="5" class="text-center">No categories yet.</th>
                                    </tr>
                              <?php endif; ?>
                        </tbody>
                  </table>
            </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>