<section class="container-fluid">
    <div class="row gx-5">
        <div class="col">
            <div class="p-3 border bg-light">
                <h3>Data Pasien</h3>
            </div>
            <table class="table">
                <thead>
                    <th scope="col">
                        <!-- Button trigger modal -->
                        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#logoutModal">
                            Tambah Data Pasien
                        </a>
                    </th>
                    <th width="300px" scope="col">
                        <?php echo form_open('home/cari/', ['method' => 'post']); ?>
                        <div class="input-group mb-1">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            <input type="text" class="form-control" name="cari" id="cari">
                        </div>
                        <?php echo form_close(); ?>
                    </th>
                </thead>
            </table>

            <!-- Modal -->
            <?php echo form_open('home/tambah/', ['method' => 'post']); ?>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pasien</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">No Transaksi</th>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="NoTransaksi" readonly value="RS-<?php echo date('my') ?>-<?php echo sprintf("%04s", $urut) ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Pasien</th>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="Nama">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            foreach ($data1 as $d1) :
                                            ?>
                                                <div class="form-check ">
                                                    <input type="radio" class="form-check-input" name="JenisKelamin" id="JenisKelamin" value="<?php echo $d1['jen_kel']; ?>">
                                                    <label for="inlineRadio1" class="form-check-label"><?php echo $d1['jen_kel']; ?></label>
                                                </div>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Penanggung</th>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            foreach ($data2 as $d2) :
                                            ?>
                                                <div class="form-check ">
                                                    <input type="radio" class="form-check-input" name="Penanggung" id="Penanggung" value="<?php echo $d2['Penanggung']; ?>">
                                                    <label for="inlineRadio1" class="form-check-label"><?php echo $d2['Penanggung']; ?></label>
                                                </div>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Poliklinik</th>
                                        <td>:</td>
                                        <td>
                                            <?php
                                            foreach ($data3 as $d3) :
                                            ?>
                                                <div class="form-check ">
                                                    <input type="radio" class="form-check-input" name="Poliklinik" id="Poliklinik" value="<?php echo $d3['Poliklinik']; ?>">
                                                    <label for="inlineRadio1" class="form-check-label"><?php echo $d3['Poliklinik']; ?></label>
                                                </div>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="simpan" value="Simpan">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">No Transaksi</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Penanggung</th>
                                <th scope="col">PoliKlinik</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($hasil as $db) : ?>
                                <tr>
                                    <th scope="col"><?php echo $no; ?></th>
                                    <td><?php echo $db->no_transaksi; ?></td>
                                    <td><?php echo $db->nama; ?></td>
                                    <td><?php echo $db->jeniskelamin; ?></td>
                                    <td><?php echo $db->penanggung; ?></td>
                                    <td><?php echo $db->poliklinik; ?></td>
                                    <td class="table-warning">
                                        <center>
                                            <a href="<?php echo base_url('home/edit/' . $db->id); ?>"><button type="button" class="btn btn-outline-success btn-sm">edit</button></a>
                                            <a href="<?php echo base_url('home/hapus/' . $db->id); ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-outline-danger btn-sm">del</button></a>
                                        </center>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>