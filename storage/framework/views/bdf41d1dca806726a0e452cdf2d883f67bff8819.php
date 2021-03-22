

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
        <?php endif; ?>
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('message.Back')); ?></a> 
             </div>
            <div class="btn-group">
                 <a type="button"  class="btn btn-info" href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('message.Categories List')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="<?php echo e(route('categories.update',$category->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(method_field('PUT')); ?>

             <?php echo e(csrf_field()); ?>

            <div class="card-body">
                <div class="form-group">
                    <label for="title"><?php echo e(__('message.Category Title')); ?></label>
                    <input type="text" value="<?php echo e($category->title); ?>" name="title" class="form-control form-control-sm" id="title" placeholder="Enter Category Title">
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
                    <label for="file"><?php echo e(__('message.Category Image')); ?></label>
                    <input type="file" name="file"  value="<?php echo e($category->file); ?>" class="form-control form-control-sm" id="file">
                    <?php if($category->file): ?>
                        <img src="<?php echo e(URL::asset('/storage/category/image/'.$category->file)); ?>" width="80" />
                    <?php endif; ?>
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
                <div class="form-group">
                    <label for="files"><?php echo e(__('message.Category Images')); ?></label>
                    <input type="file"  value="<?php echo e($category->file); ?>" name="files" class="form-control form-control-sm" id="files" multiple>
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
                    <label for="description"><?php echo e(__('message.Category Description')); ?></label>
                    <textarea  name="description" class="form-control form-control-sm" id="compose-textarea">
                         <?php echo e($category->description); ?>

                    </textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="active"><?php echo e(__('message.Category Active')); ?></label>
                    <input type="checkbox" name="active" 
                        value="<?php echo e($category->active); ?>" 
                            <?php echo e($category->active == '1' ? 'checked' : ''); ?> id="active">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                 <button type="submit" class="btn btn-outline-dark bg-success"><?php echo e(__('message.Update')); ?></button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote();
  })
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views/categories/edit.blade.php ENDPATH**/ ?>