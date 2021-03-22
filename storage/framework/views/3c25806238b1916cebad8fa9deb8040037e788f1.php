<div>
<?php echo $__env->make('livewire.category.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('livewire.category.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card">
    <div class="card-header">
    <?php if(session()->has('message')): ?>
    <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
    <?php endif; ?>
    <h3 class="card-title">
        <div class="btn-group">
            <button type="button"  class="btn btn-info"  data-toggle="modal" data-target="#modal-lg-create-category">New Department</button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Active</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->title); ?></td>
            <td class="text-center"><img src="<?php echo e(asset('assets/images/category')); ?>/<?php echo e($category->file); ?>" width="80" /></td>
            <td><?php echo e($category->description); ?></td>
            <td class="text-center">
                <?php if($category->active == 0): ?>
                    <button type="button" class="btn btn-success btn-block" wire:click.prevent="active(<?php echo e($category->id); ?>)">
                        Active
                    </button>
                    <?php else: ?>
                    <button type="button" class="btn btn-warning btn-block" wire:click.prevent="inActive(<?php echo e($category->id); ?>)">
                        InActive
                    </button>
                <?php endif; ?>
            </td>
            <td><?php echo e($category->posts->count()); ?></td>
            <td class="text-center">
                <div class="btn-group content-align-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-update-category" wire:click.prevent="edit(<?php echo e($category->id); ?>)">
                        Edit
                    </button>

                    <button type="button" class="btn btn-danger" wire:click.prevent="destroy(<?php echo e($category->id); ?>)">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Active</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<?php /**PATH C:\xampp\htdocs\kwspost\resources\views\livewire\department\department-component.blade.php ENDPATH**/ ?>