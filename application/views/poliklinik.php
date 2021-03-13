<section class="container-fluid">
    <div class="row gx-5">
        <div class="col">
            <!-- cek login -->
            <?php
            if ($this->session->userdata['status'] != TRUE) {
                redirect('home/login');
            }
            ?>
            <center>

                <div class="p-3 border bg-light position-relative" style="width: 50%;">
                    </br>
                    <h3 class="position-absolute top-0 start-50 translate-middle-x">Daftar Data Poliklinik</h3>

                    <table class="table table-striped">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Poliklinik</th>
                                <th scope="col">
                                    <center>
                                        <a href="<?php echo base_url('/home/logout') ?>" class="btn btn-outline-secondary btn-sm"> Exit</a>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($database as $db) :
                            ?>
                                <tr>
                                    <th scope="col">
                                        <?php echo $no; ?>
                                    </th>
                                    <td class="table-secondary">
                                        <?php echo $db->Poliklinik; ?>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?php echo base_url('home/hapusPoliklinik/' . $db->id); ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-outline-danger btn-sm">del</button></a>
                                        </center>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                    </br>
                    <!-- Button trigger modal -->
                    <button class="btn btn-outline-primary position-absolute bottom-0 start-50 translate-middle-x" data-toggle="modal" data-target="#logoutModal">Tambah</button>
                </div>
            </center>

            <!-- Modal -->
            <?php echo form_open('home/tambahPoliklinik/', ['method' => 'post']); ?>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pasien</h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Nama Poliklinik</th>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group mb-3 ">
                                                <input type="text" class="form-control" name="Poliklinik" id="Poliklinik">
                                            </div>
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
</section>