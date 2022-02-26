<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header">
            <?php echo e(isset($post) ? 'Edit Post' : 'Create Post'); ?>

        </div>
        <div class="card-body">
            <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(isset($post) ? route('posts.update', $post->id) : route('posts.store')); ?>" method="POST"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($post)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                           value="<?php echo e(isset($post) ? $post->title : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5"
                              class="form-control"><?php echo e(isset($post) ? $post->description : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>

                    <input type="hidden" id="content" name="content" value="<?php echo e(isset($post) ? $post->content : ''); ?>">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="published_at">Published at</label>
                    <input type="text" class="form-control" name="published_at" id="published_at"
                           value="<?php echo e(isset($post) ? $post->published_at : ''); ?>">
                </div>
                <?php if(isset($post)): ?>
                    <div class="form-group">
                        <img src="<?php echo e(asset($post->image)); ?>" alt="Post Image" style="width:100%">
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                    <?php if(isset($post)): ?>
                                    <?php if($category->id === $post->category_id): ?>
                                    selected
                                <?php endif; ?>
                                <?php endif; ?>
                            >
                                <?php echo e($category->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php if($tags->count()>0): ?>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tag->id); ?>"
                                        <?php if(isset($post)): ?>
                                    <?php if($post->hastags($tag->id)): ?>
                                        selected
                                        <?php endif; ?>
                                        <?php endif; ?> >

                                    <?php echo e($tag->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        <?php echo e(isset($post) ? 'Update post' : 'Create post'); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        flatpickr('#published_at', {
            enableTime: true
        })

        $(document).ready(function() {
            $('.tags-selector').select2();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mcms3.1\resources\views/posts/create.blade.php ENDPATH**/ ?>