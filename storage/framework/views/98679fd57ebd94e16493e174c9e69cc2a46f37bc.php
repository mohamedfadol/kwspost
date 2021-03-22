

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
        <?php endif; ?>
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="<?php echo e(route('posts.index')); ?>"><?php echo e(__('message.Back')); ?></a>
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" href="<?php echo e(route('posts.index')); ?>"><?php echo e(__('message.Posts List')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?php echo e(route('posts.update',$post->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(method_field('PUT')); ?>

             <?php echo e(csrf_field()); ?>

            <div class="card-body">
                <div class="form-group">
                    <label for="title"><?php echo e(__('message.Post Title')); ?></label>
                    <input type="text" name="title" value="<?php echo e($post->title); ?>" class="form-control form-control-sm" id="title" placeholder="Enter Post Title">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="file"><?php echo e(__('message.Post Image')); ?></label>
                    <input type="file" name="file" value="<?php echo e($post->file); ?>"  class="form-control form-control-sm" id="file">
                     <img id="blah" src="#" alt="..." class="img-thumbnail">
                    <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="mb-3 text-center">
                <div class="preview img-thumbnail"></div>
               </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="files"><?php echo e(__('message.Post Images')); ?></label>
                    <input type="file" name="files[]" value="<?php echo e($post->files); ?>" class="form-control form-control-sm"  id="multiImg" multiple>
                    <?php $__errorArgs = ['files'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="short_description"><?php echo e(__('message.Post Short Description')); ?></label>
                    <textarea type="text" name="short_description" class="form-control  "
                        id="compose-textarea" style="height: 300px">
                         <?php echo e($post->short_description); ?>

                    </textarea>
                    <?php $__errorArgs = ['short_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="long_description"><?php echo e(__('message.Post Long Description')); ?></label>
                    <textarea type="text" name="long_description" class="form-control  "
                        id="compose-textarea" style="height: 300px">
                        <?php echo e($post->long_description); ?>

                    </textarea>
                    <?php $__errorArgs = ['long_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="category_id"><?php echo e(__('message.Post Category')); ?></label>
                    <select id="category_id" class="custom-select" name="category_id" data-style="select-with-transition" title="Post Category" data-size="7">
                                <?php if(isset($categories)): ?>
                                <option value="">Choose ... Branch</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                    </select>
                     <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="active"><?php echo e(__('message.Post Active')); ?></label>
                    <input type="checkbox" name="active" value="1" class="" id="active">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-dark bg-primary"><?php echo e(__('message.Update')); ?></button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    $(function() {
        var imgPrev = function(input, imgPlaceholder) {

            if (input.files) {
                var allFiles = input.files.length;

                for (i = 0; i < allFiles; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#multiImg').on('change', function() {
            imgPrev(this, 'div.preview');
        });
    });
    </script>

<script>
    /* function for perview image*/
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function(){
        readURL(this);
    });
    /* function for perview image*/
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views\posts\edit.blade.php ENDPATH**/ ?>