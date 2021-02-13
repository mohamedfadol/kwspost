<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 0;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        {{-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> --}}
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link"  href="{{ route('register') }}" role="button">
            {{ ('register') }}
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link"  data-slide="true" href="{{ route('login') }}" role="button">
            {{ ('login') }}
        </a>
        </li>
    </ul>
</nav>

<!-- /.navbar -->
