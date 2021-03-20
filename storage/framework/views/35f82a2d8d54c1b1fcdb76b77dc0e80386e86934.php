

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php if(session()->has('message')): ?>
             <div class="alert alert-success text-center toastrDefaultSuccess"> <?php echo e(session('message')); ?> </div>
            <?php endif; ?>
            <form action="<?php echo e(route('webSetting.update',$Kwspost)); ?>" 
                method="POST" enctype="multipart/form-data">
            <?php echo e(method_field('PUT')); ?>

            <?php echo e(csrf_field()); ?>

            <a href="<?php echo e(route('webSetting.index')); ?>" class="btn btn-primary btn-block mb-3">Back</a>
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
                        <i class="far fa-trash-alt"></i> Title
                        </a>
                        <input type="text" name="title" value="<?php echo e($Kwspost->title); ?>" class="form-control"/>    
                        <?php $__errorArgs = ['title'];
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
                        <i class="fas fa-filter"></i> E-mail
                        </a>
                        <input type="text" name="email" value="<?php echo e($Kwspost->email); ?>" class="form-control"/>
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
                        <i class="fas fa-inbox"></i> Phone Number 1 
                        </a>
                        <input type="text" name="phone1" value="<?php echo e($Kwspost->phone1); ?>" class="form-control"/>
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
                        <i class="far fa-envelope"></i> Phone Number 2
                        </a>
                        <input type="text" name="phone2" value="<?php echo e($Kwspost->phone2); ?>" class="form-control"/>
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
                        <i class="far fa-file-alt"></i> Phone Number 3
                        </a>
                        <input type="text" name="phone3" value="<?php echo e($Kwspost->phone3); ?>" class="form-control"/>
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
                    <h3 class="card-title">Compose New Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
                    <input type="checkbox" name="active" 
                        value="1"  <?php echo e($Kwspost->active == 1 ? 'checked' : ''); ?>

                        data-bootstrap-switch  
                            data-on-color="success">
                </div>
                <div class="form-group">
                    <input name="headerContent" value="<?php echo e($Kwspost->headerContent); ?>" class="form-control" placeholder="header Content">
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
                    <input name="footerContent" value="<?php echo e($Kwspost->footerContent); ?>" class="form-control" placeholder="footer Content">
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
                    <textarea id="compose-textarea" 
                        name="description" class="form-control"   value="<?php echo e($Kwspost->description); ?>"
                            style="height: 300px">   <?php echo e($Kwspost->description); ?> 
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
                    <img src="<?php echo e(URL::asset('/storage/webSetting/image/'.$Kwspost->logo)); ?>" width="80" 
                        class="img-thumbnail"
                    />
                </div>
                <div class="form-group">
                <div class="btn btn-primary col start btn-file">
                    <i class="fas fa-upload"></i> Attachment
                    <input type="file" name="logo"  value="<?php echo e($Kwspost->logo); ?>">
                </div>
                    <p class="help-block">Max. 32MB</p>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <div class="float-right">
                    <button type="button" 
                        class="btn btn-default">
                            <i class="fas fa-pencil-alt"></i> Draft</button>
                    <button type="submit" 
                        class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
                    <button type="reset" 
                        class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                </div>
                <!-- /.card-footer -->
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

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kwspost\resources\views/Kwspost/edit.blade.php ENDPATH**/ ?>