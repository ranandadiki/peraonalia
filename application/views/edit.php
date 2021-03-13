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

                <div class="p-3 border bg-light position-relative" style="width: 71%;">
                    </br>
                    <h3 class="position-absolute top-0 start-50 translate-middle-x">Edit Data Pasien</h3>

                    <?php echo form_open('home/editdata/' . $db->id, ['method' => 'post']); ?>

                    <table class="table table-striped">
                        <input type="hidden" name="Id" value="<?php echo $baris['id'] ?>" readonly>
                        <tbody>
                            <tr>
                                <th scope="col">
                                    No Transaksi
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="NoTransaksi" value="<?php echo $baris['no_transaksi'] ?>" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    Nama Pasien
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="Nama" value="<?php echo $baris['nama'] ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    Jenis Kelamin
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php
                                    foreach ($jenis as $d1) :
                                    ?>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="JenisKelamin" id="JenisKelamin" value="<?php echo $d1['jen_kel']; ?>">
                                            <label for="inlineRadio1" class="form-check-label"><?php echo $d1['jen_kel']; ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">
                                    Penanggung
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php
                                    foreach ($tanggung as $t1) :
                                    ?>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="Penanggung" id="Penanggung" value="<?php echo $t1['Penanggung']; ?>">
                                            <label for="inlineRadio1" class="form-check-label"><?php echo $t1['Penanggung']; ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <th scope="col">
                                    Poliklinik
                                </th>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php
                                    foreach ($poli as $p1) :
                                    ?>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="Poliklinik" id="Poliklinik" value="<?php echo $p1['Poliklinik']; ?>">
                                            <label for="inlineRadio1" class="form-check-label"><?php echo $p1['Poliklinik']; ?></label>
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </br>
                    </br>
                    <button class="btn btn-outline-primary position-absolute bottom-0 start-50 translate-middle" type="submit" name="edit" value="Edit">Update</button>
                </div>
                <?php echo form_close(); ?>
            </center>

        </div>
    </div>
</section>