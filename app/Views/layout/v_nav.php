<li class="nav-item d-none d-sm-inline-block">

</li>
<li class="nav-item d-none d-sm-inline-block">

</li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item mr-2">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
            <form class="form-inline">
                <div class="input-group input-group-lg">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <?php if (empty(session('id_user'))) { ?>
        <li class="nav-item mr-2">
            <a href="<?= base_url('register') ?>" type="button" class="btn btn-block button-register">Register</a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('login') ?>" type="button" class="btn btn-block button-login">Login</a>
        </li>
    <?php } else { ?>
        <li class="nav-item">
            <a href="<?= base_url('logout') ?>" type="button" class="btn btn-block btn-danger">Logout</a>
        </li>
    <?php } ?>
</ul>
</nav>
<!-- /.navbar -->