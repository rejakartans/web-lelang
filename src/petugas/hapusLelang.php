<?php

$title = 'Hapus Lelang';

require '../layouts/header.php';

require 'navbar.php';

require '../../public/app.php';

$id = $_GET['id_lelang'];

if (hapusLelang($id) > 0) {
    $sukses = true;
} else {
    echo mysqli_error($conn);
}

?>

<?php if (isset($sukses)) : ?>

    <div class="d-flex justify-content-center py-5 mt-3">
        <div class="card shadow bg-success">
            <div class="card-body">
                <h4 class="text-center text-light">Lelang Berhasil di Batalkan!</h4>
                <hr>
                <img src="../../assets/img/sukses.svg" width="250" alt="" data-aos="zoom-in" data-aos-duration="700">
                <div class="button mt-3">
                    <a href="barang.php" class="btn btn-primary text-light shadow">OK!</a>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>




<?php require '../layouts/footer.php'; ?>