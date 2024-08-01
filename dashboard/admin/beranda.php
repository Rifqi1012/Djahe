<?php
include '..dashboard/admin/header.php';
?>
<div style="background-color: #FFF8F4; min-height: 100vh; padding: 20px; display: flex; justify-content: center;">

    <div class="card shadow-lg" style="height: 410px; background-color: #FFF8F4;">
        <center>
            <?php
            $level = $_SESSION['level'];
            if ($level == "Pelayan") { ?>
                <img src="assets/image/pelayan.png" class="pt-5" alt="foto" width="150">
            <?php } elseif ($level == "Kasir") { ?>
                <img src="assets/image/kasir.png" class="pt-5" alt="foto" width="150">
            <?php } elseif ($level == "Gudang") { ?>
                <img src="assets/image/gudang.png" class="pt-5" alt="foto" width="150">
            <?php } elseif ($level == "Koki") { ?>
                <img src="assets/image/koki.png" class="pt-5" alt="foto" width="150">
            <?php } elseif ($level == "") { ?>
                <img src="" class="pt-5" alt="foto" width="150">
            <?php } ?>

            <div class="card-body">
                <h5 class="card-title">Selamat Datang <?= $_SESSION['level'] ?></h5>
                <p class="card-text"><?= $_SESSION['nama_user'] ?></p>
            </div>
        </center>
    </div>
</div>
