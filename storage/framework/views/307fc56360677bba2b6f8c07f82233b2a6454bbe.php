<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php if(session()->has('message')): ?>
             <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
            <?php endif; ?>
            <form action="<?php echo e(route('webSetting.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <a href="<?php echo e(route('webSetting.index')); ?>" class="btn btn-primary btn-block mb-3">
                    <?php echo e(__('message.Back')); ?></a>
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('message.Contact Information')); ?></h3>

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
                        <i class="far fa-envelope"></i> <?php echo e(__('message.E-mail')); ?>

                        </a>
                        <input type="text" name="email" class="form-control"/>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> <?php echo e(__('message.Phone Number 1')); ?>

                        </a>
                        <input type="text" name="phone1" class="form-control"/>
                        <?php $__errorArgs = ['phone1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> <?php echo e(__('message.Phone Number 2')); ?>

                        </a>
                        <input type="text" name="phone2" class="form-control"/>
                        <?php $__errorArgs = ['phone2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i> <?php echo e(__('message.Phone Number 3')); ?>

                        </a>
                        <input type="text" name="phone3" class="form-control"/>
                        <?php $__errorArgs = ['phone3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <h3 class="card-title"><?php echo e(__('message.Create New Web Home Details')); ?></h3>
                <div class="float-right">
                    <button type="submit"
                        class="btn btn-success">
                            <i class="fas fa-pencil-alt"></i><?php echo e(__('message.Add New')); ?></button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
                    <label for="active"><?php echo e(__('message.Active')); ?></label>
                    <input type="checkbox" name="active"
                        value="1" checked
                        data-bootstrap-switch data-off-color="danger"
                            data-on-color="success">
                </div>
                <div class="form-group">
                    <label for="title"><?php echo e(__('message.Title Web')); ?></label>
                    <input name="title" class="form-control" placeholder="Name Of Title">
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
                    <label for="headerContent"><?php echo e(__('message.header Content')); ?></label>
                    <input name="headerContent" class="form-control" placeholder="header Content">
                    <?php $__errorArgs = ['headerContent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="footerContent"><?php echo e(__('message.footer Content')); ?></label>
                    <input name="footerContent" class="form-control" placeholder="footer Content">
                    <?php $__errorArgs = ['footerContent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="description"><?php echo e(__('message.Description About Us')); ?></label>
                    <textarea id="compose-textarea"
                        name="description" class="form-control"
                            style="height: 300px">
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
                    <label for="file"><?php echo e(__('message.Upload New Logo Image')); ?></label>
                <div class="btn btn-primary col start btn-file">
                    <i class="fas fa-upload"></i><?php echo e(__('message.Upload Image')); ?>

                    <input type="file" name="logo" id="logo">
                </div>
                    <p class="help-block">Max. 32MB</p>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
          </form>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views/Kwspost/create.blade.php ENDPATH**/ ?>