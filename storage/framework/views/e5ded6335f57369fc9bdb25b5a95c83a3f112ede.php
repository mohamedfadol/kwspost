

<?php $__env->startSection('styles'); ?>
.badge {
    display: inline-block;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    margin: 96px;
}
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="<?php echo e(route('webSetting.create')); ?>" class="btn btn-success btn-block mb-3">Create New Web Home Setting</a>
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-envelope"></i> E-mail
                        </a>
                        <span class="badge bg-info text-center"><?php echo e($Kwspost->email); ?></span>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> Phone Number 1 
                        </a>
                        <span class="badge bg-info text-center"><?php echo e($Kwspost->phone1); ?></span>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> Phone Number 2
                        </a>
                        <span class="badge bg-info text-center"><?php echo e($Kwspost->phone2); ?></span>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> Phone Number 3
                        </a>
                        <span class="badge bg-info text-center"><?php echo e($Kwspost->phone3); ?></span>
                    </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Web Setting Home</h3>
                    <div class="float-right">
                        <a type="button" href="<?php echo e(route('webSetting.edit',$Kwspost->id)); ?>"
                            class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i>Update
                        </a>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="form-group">
                        <input type="checkbox" name="my-checkbox" 
                            checked data-bootstrap-switch 
                                data-off-color="danger" 
                                    data-on-color="success">
                    </div>
                    <div class="form-group">
                        <img src="<?php echo e(URL::asset('/storage/webSetting/image/'.$Kwspost->logo)); ?>" width="80" 
                            class="img-thumbnail"
                        />
                    </div>
                    <div class="form-group">
                        <input  value="<?php echo e($Kwspost->title); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="headerContent" value="<?php echo e($Kwspost->headerContent); ?>" class="form-control" placeholder="header Content">
                    </div>
                    <div class="form-group">
                        <input name="footerContent" value="<?php echo e($Kwspost->footerContent); ?>" class="form-control" placeholder="footer Content">
                    </div>
                    <div class="form-group">
                        <textarea id="compose-textarea" name="description" 
                            class="form-control" style="height: 300px">
                            <?php echo e($Kwspost->footerContent); ?>

                        </textarea>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views/Kwspost/index.blade.php ENDPATH**/ ?>