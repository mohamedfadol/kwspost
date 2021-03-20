<?php $__env->startSection('content'); ?>
<div class="card">
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('success')); ?> </div>
        <?php endif; ?>
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="<?php echo e(route('posts.create')); ?>">
                    <?php echo e(__('message.New Post')); ?></a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('message.ID')); ?></th>
                    <th><?php echo e(__('message.Post Title')); ?></th>
                    <th><?php echo e(__('message.Image')); ?></th>
                    <th><?php echo e(__('message.Post Category')); ?></th>
                    <th><?php echo e(__('message.Post Active')); ?></th>
                    <th><?php echo e(__('message.Post Date')); ?></th>
                    <th><?php echo e(__('message.Actions')); ?></th>
                </tr>
            </thead>
            <?php if($posts->count() > 0): ?>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post->id); ?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-block"
                            href="<?php echo e(route('posts.show',$post->id)); ?>">
                                <?php echo e($post->title); ?>

                        </a>
                        </td>
                        <td class="text-center">
                            <img class="img-thumbnail"
                                src="<?php echo e(URL::asset('/storage/post/image/'.$post->file)); ?>"
                                    width="80" />
                        </td>
                        <td><?php echo e($post->category->title); ?></td>

                        <td class="text-center">
                            <?php if($post->active == 0): ?>
                                <a type="button" class="btn btn-success btn-block"
                                    href="<?php echo e(route('post.activePost',$post->id)); ?>">
                                    <?php echo e(__('message.Active')); ?>

                                </a>
                                <?php else: ?>
                                <a type="button" class="btn btn-warning btn-block"
                                    href="<?php echo e(route('post.inActivePost',$post->id)); ?>">
                                    <?php echo e(__('message.InActive')); ?>

                                </a>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($post->created_at); ?></td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <a type="button" class="btn btn-success"
                                    href="<?php echo e(route('posts.edit',$post->id)); ?>">
                                    <?php echo e(__('message.Edit')); ?>

                                </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete"
                                    data-toggle="modal" data-target="#modal-warning"
                                        data-id=<?php echo e($post->id); ?> ><?php echo e(__('message.Delete')); ?> </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php else: ?>
                <p class="text-info text-center"><?php echo e(__('message.Theres No Posts In Your Database To Show Them')); ?></p>
            <?php endif; ?>
            <tfoot>
                <tr>
                    <th><?php echo e(__('message.ID')); ?></th>
                    <th><?php echo e(__('message.Post Title')); ?></th>
                    <th><?php echo e(__('message.Image')); ?></th>
                    <th><?php echo e(__('message.Post Category')); ?></th>
                    <th><?php echo e(__('message.Post Active')); ?></th>
                    <th><?php echo e(__('message.Post Date')); ?></th>
                    <th><?php echo e(__('message.Actions')); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


 <!-- start /.modal delete -->
<div class="modal fade delete" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title text-white"><?php echo e(__('message.For Comfirm Delete Post')); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="post">
                <?php echo e(method_field('delete')); ?>

                 <?php echo e(csrf_field()); ?>

            <div class="bg-danger text-white text-center"><?php echo e(__('message.Sure Delete Post')); ?></div>
            <input type="hidden" id="id" name="id" value="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal"><?php echo e(__('message.Not Delete')); ?></button>
              <button type="submit" class="btn btn-outline-dark bg-danger"><?php echo e(__('message.Yes ! Delete')); ?></button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- end /.modal delete -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views/posts/index.blade.php ENDPATH**/ ?>