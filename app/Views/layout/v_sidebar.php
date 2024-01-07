<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?= base_url() ?>/public/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SnapFoodie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <?php if (!empty(session('profile_pic')) && !empty(session('nm_user'))) { ?>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <?php if (session('profile_pic') == 'No profile picture yet' && session('gender') == '0') { ?>
                        <img src="<?= base_url('public/assets/profile_pic/user-default.png') ?>" class="img-circle elevation-2" alt="User Image">
                    <?php } elseif (session('profile_pic') == 'No profile picture yet' && session('gender') == '1') { ?>
                        <img src="<?= base_url('public/assets/profile_pic/user-man.png') ?>" class="img-circle elevation-2" alt="User Image">
                    <?php } elseif (session('profile_pic') == 'No profile picture yet' && session('gender') == '2') { ?>
                        <img src="<?= base_url('public/assets/profile_pic/user-woman.png') ?>" class="img-circle elevation-2" alt="User Image">
                    <?php } else { ?>
                        <img src="<?= base_url('public/assets/profile_pic/' . session()->get('profile_pic')) ?>" class="img-circle elevation-2" alt="User Image">
                    <?php } ?>
                </div>
                <div class="info">
                    <a href="<?= base_url('myprofile') ?>" class="d-block"><?= session('nm_user') ?></a>
                </div>
            </div>
        <?php } else { ?>
            <!-- Fallback code or redirect to login page -->
        <?php } ?>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if (empty(session('id_user'))) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>" class="nav-link active">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>" class="nav-link active">
                            <i class="nav-icon fa-solid fa-house"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('create') ?>" class="nav-link">
                            <i class="nav-icon fa-solid fa-circle-plus"></i>
                            <p>
                                Create New Post
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('restaurant') ?>" class="nav-link">
                            <i class="nav-icon fa-solid fa-utensils"></i>
                            <p>
                                Restaurant
                            </p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>