<?php

$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali = date("d-m-Y", $tujuh_hari);


?>

<!-- Form Elements -->
<div class="panel panel-primary">
    <div class="panel-heading">Tambah Data</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" onsubmit="return validasi(this)">

                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="buku">
                            <?php

                            $sql = $koneksi->query("SELECT * FROM tb_buku order by id");

                            while ($data=$sql->fetch_assoc()){
                                echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
                            }

                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <select class="form-control" name="nama">
                            <?php

                            $sql = $koneksi->query("SELECT * FROM tb_anggota order by nim");

                            while ($data=$sql->fetch_assoc()){
                                echo "<option value='$data[nim].$data[nama]'>$data[nim].$data[nama]</option>";
                            }

                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input class="form-control" type="text" name="tgl_pinjam" value="<?php echo $tgl_pinjam;?>" readonly />
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input class="form-control" type="text" name="tgl_kembali" value="<?php echo $kembali;?>" readonly />
                        </div>

                        
                        <div>
                            <input type="submit" name="simpan" value="simpan" style="margin-top: 8px" class="btn btn-primary">
                            </div>
                </div>
                            </form>
                
            </div>
        </div>
    </div>
</div>

<?php

$nim = $_POST ['nim'];
$nama = $_POST ['nama'];
$tempat_lahir = $_POST ['tempat_lahir'];
$tgl_lahir = $_POST ['tgl_lahir'];
$jk = $_POST ['jk'];
$prodi = $_POST ['prodi'];
$simpan = $_POST ['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into tb_anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi) values('$nim','$nama','$tempat_lahir','$tgl_lahir','$jk','$prodi')");
    
    if ($sql) {
        ?>

        <script type="text/javascript">
        alert ("Data Berhasil Disimpan");
        window.location.href="?page=anggota";
        </script>
        <?php
    }
}

?>