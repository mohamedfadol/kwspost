<div>
<?php echo $__env->make('livewire.designation.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('livewire.designation.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card">
    <div class="card-header">
    <?php if(session()->has('message')): ?>
    <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
    <?php endif; ?>
    <h3 class="card-title">
        <div class="btn-group">
            <button type="button"  class="btn btn-info"  data-toggle="modal" data-target="#modal-lg-create-designation">New designation</button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>designation ID</th>
                <th>designation Name</th>
                <th>designation Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $designationes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($designation->id); ?></td>
            <td><?php echo e($designation->name); ?></td>
            <td><?php echo e($designation->Details); ?></td>
            <td>
                <div class="btn-group content-align-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-update-designation" wire:click.prevent="edit(<?php echo e($designation->id); ?>)">
                        Edit
                    </button>
                    <button type="button" class="btn btn-warning">
                        InActive
                    </button>
                    <button type="button" class="btn btn-danger" wire:click.prevent="destroy(<?php echo e($designation->id); ?>)">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
        <tr>
            <th>designation ID</th>
            <th>designation Name</th>
            <th>designation Details</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<?php /**PATH C:\xampp\htdocs\hr\resources\views/livewire/designation-component.blade.php ENDPATH**/ ?>