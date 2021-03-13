<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="<?php echo e(asset('/template/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo e(__('message.Kws-Post')); ?></span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="<?php echo e(asset('/template/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
    </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> <?php echo e(__('message.General Control Panel')); ?> <i class="right fas fa-angle-left"></i></p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(__('message.Main Home')); ?></p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo e(route('admin.categories')); ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(__('message.Departments')); ?></p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(__('message.Posts')); ?></p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p><?php echo e(__('message.Controling Users')); ?></p>
        </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                Search
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\kwspost\resources\views/layouts/sidbare.blade.php ENDPATH**/ ?>