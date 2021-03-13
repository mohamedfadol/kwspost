<div wire:ignore.self class="modal fade" id="modal-lg-update-category"  tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Update An Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Back</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form method="POST" enctype="multipart/form-data">
<div class="card-body">
    <div class="form-group">
        <label for="title">Category Title</label>
        <input type="text" name="title" wire:model="title" class="form-control form-control-sm" id="title" placeholder="Enter Category Title">
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
        <label for="file">Category Image</label>
        <input type="file" name="file" wire:model="file" class="form-control form-control-sm" id="file">
        <!-- <?php if($dbphoto || $file): ?>
            <img src="<?php echo e(empty(!$file) ? $file->temporaryUrl():route('images.user',$dbphoto)); ?>" width="120" class="">
            <?php else: ?>
            <img src="" width="120" class="">
        <?php endif; ?> -->
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
        <label for="files">Category Images</label>
        <input type="file" name="files[]" wire:model="files" class="form-control form-control-sm" id="files" multiple>
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
        <label for="description">Category Description</label>
        <textarea type="text" name="description" wire:model="description" class="form-control form-control-sm" id="description" placeholder="Enter Designation Details"></textarea>
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
        <label for="active">Category InActive</label>
        <input type="checkbox" name="active" wire:model="active" value="0" class="" id="active">
    </div>
</div>
<!-- /.card-body -->
</form>
</div>
<!-- /.card -->

</div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php /**PATH C:\xampp\htdocs\kwspost\resources\views/livewire/category/update.blade.php ENDPATH**/ ?>