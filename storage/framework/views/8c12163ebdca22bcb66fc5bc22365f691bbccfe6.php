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
                <th>Category Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Category Active</th>
                <th>Post Counts</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->title); ?></td>
            <td><?php echo e($category->file); ?></td>
            <td><?php echo e($category->description); ?></td>
            <td><?php echo e($category->active); ?></td>
            <td><?php echo e($category->posts->count()); ?></td>

            <td>
                <div class="btn-group content-align-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-update-category" wire:click.prevent="edit(<?php echo e($category->id); ?>)">
                        Edit
                    </button>
                    <button type="button" class="btn btn-warning">
                        InActive
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
            <th>Category Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Category Active</th>
            <th>Post Counts</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<?php /**PATH C:\xampp\htdocs\kwspost\resources\views/livewire/department/department-component.blade.php ENDPATH**/ ?>