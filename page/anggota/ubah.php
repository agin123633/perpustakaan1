<?php
    $nim = $_GET['id'];
    $sql = $koneksi->query("SELECT * FROM tb_anggota where nim='$nim'");
    $tampil = $sql->fetch_assoc(); 
    $jkl = $tampil['jk'];
    $prodi = $tampil['prodi'];
?>

<!-- Form Elements -->
<div class="panel panel-default">
    <div class="panel-heading">Tambah Data</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST">
                        <div class="form-group">
                            <label>NIM</label>
                            <input class="form-control" name="nim" value="<?php echo  $tampil['nim']?>" readonly/>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" value="<?php echo  $tampil['nama']?>"/>
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir" value="<?php echo  $tampil['tempat_lahir']?>"/>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo  $tampil['tgl_lahir']?>" />
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label><br/>
                            <label class="checkbox-inline">
                                <Input type="checkbox" value="l" name="jk" <?php if ($jk==l){
                                    echo "selected";
                                } ?>/> Laki-laki
                            </label>
                            <label class="checkbox-inline">
                                <Input type="checkbox" value="p" name="jk" <?php if ($jk==p){
                                    echo "selected";
                                } ?>/>Perempuan
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi">
                                <option value="ti" <?php if ($prodi=='ti'){
                                    echo "selected";
                                }?>>Teknik Informatika</option>
                                <option value="si" <?php if ($prodi=='si'){
                                    echo "selected";
                                }?>>Sistem Informasi</option>
                            </select>
                        </div>
                        
                        <div>
                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
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