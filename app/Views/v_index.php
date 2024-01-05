<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <?php
                    if (!empty(session()->getFlashdata('error'))) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-warning" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }

                    if (session()->getFlashdata('success')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo session()->getFlashdata('success');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>