<?php

$id  = $_GET['id'];
$judul = $_GET['judul'];
$tgl_kembali = $_GET['tgl_kembali'];
$lambat = $_GET['lambat'];


if ($lambat > 7) {
    ?>

    <script type="text/javascript">
    alert("Pinjam Buku Tidak Dapat Diperpanjang, Karena lebih dari 7 Hari.. Kembalikan Dahulu Kemudian Pinjam Kembali");
    window.location.href="?page=transaksi";
    </script>
    <?php
}

?>