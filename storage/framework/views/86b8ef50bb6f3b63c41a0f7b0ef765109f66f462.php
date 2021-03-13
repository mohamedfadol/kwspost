<div wire:ignore.self class="modal fade" id="modal-lg-update-designation" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Update designation</h4>
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
<form>
<div class="card-body">
    <div class="form-group">
    <input type="hidden" name="ids" wire:model="ids">
        <label for="name">Branch Name</label>
        <input type="text" name="name" wire:model="name" class="form-control form-control-sm" id="name" placeholder="Enter designation Name">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>
<!-- /.card-body -->
</form>
</div>
<!-- /.card -->

</div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" wire:click.prevent="update()" class="btn btn-primary">Update changes</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php /**PATH C:\xampp\htdocs\kwspost\resources\views/livewire/designation/update.blade.php ENDPATH**/ ?>