<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;

                                        $sql = $koneksi->query("SELECT * FROM tb_buku");

                                        while ($data= $sql->fetch_assoc()){

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['judul'] ?></td>
                                            <td><?php echo $data['pengarang'] ?></td>
                                            <td><?php echo $data['penerbit'] ?></td>
                                            <td><?php echo $data['isbn'] ?></td>
                                            <td><?php echo $data['jumlah_buku'] ?></td>
                                            <td>
                                                <a href="" class="btn btn-info" >Ubah</a>
                                                <a href="" class="btn btn-info" >Hapus</a>
                                            </td>
                                        </tr>

                                            <?php } ?>
                                    </tbody>       
                                
                            </div>
                        </div>
        </div>
    </div>           
</div>