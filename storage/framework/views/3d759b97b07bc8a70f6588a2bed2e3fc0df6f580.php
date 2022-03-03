<?php $__env->startSection('content'); ?>

      <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="panel panel-default">
            <div class="panel-heading">
                  Edit blog settings
            </div>

            <div class="panel-body">
                  <form action="<?php echo e(route('settings.update')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                              <label for="name">Site name</label>
                              <input type="text" name="site_name" value="<?php echo e($settings->site_name); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="site_info">About site:</label>
                              <textarea name="site_info" id="site_info" cols="30" rows="10" class="form-control" ><?php echo e($settings->site_info); ?></textarea>
                        </div>

                        <div class="form-group">
                              <label for="name">Address</label>
                              <input type="text" name="address" class="form-control" value="<?php echo e($settings->address); ?>">
                        </div>

                        <div class="form-group">
                              <label for="name">Contact phone</label>
                              <input type="text" name="contact_number" class="form-control" value="<?php echo e($settings->contact_number); ?>">
                        </div>

                        <div class="form-group">
                              <label for="name">Contact email</label>
                              <input type="text" name="contact_email" class="form-control" value="<?php echo e($settings->contact_email); ?>">
                        </div>
                        <div class="form-group">
                              <label for="footer_text1">Footer text: Column: 1</label>
                              <input type="text" name="footer_text1" class="form-control" value="<?php echo e($settings->footer_text1); ?>">
                        </div>
                        <div class="form-group">
                              <label for="footer_text2">Footer text: Column: 2</label>
                              <input type="text" name="footer_text2" class="form-control" value="<?php echo e($settings->footer_text2); ?>">
                        </div>
                        <div class="form-group">
                              <label for="footer_text3">Footer text: Column: 3</label>
                              <input type="text" name="footer_text3" class="form-control" value="<?php echo e($settings->footer_text3); ?>">
                        </div>


                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Update site settings
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/admin/settings/settings.blade.php ENDPATH**/ ?>