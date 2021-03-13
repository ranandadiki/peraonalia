<section class="container-fluid">
    <div class="row gx-5">
        <div class="col">
            <center>

                <div class="p-3 border bg-light position-relative" style="width: 50%;">
                    </br>
                    <h3 class="position-absolute top-0 start-50 translate-middle-x">Login</h3>
                    <?php echo form_open('home/ceklogin/', ['method' => 'post']); ?>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    Username
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <div class="input-group mb-3 ">
                                        <input type="text" class="form-control" name="Username" id="Username">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <div class="input-group mb-3 ">
                                        <input type="password" class="form-control" name="Password" id="Password">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-outline-primary position-absolute bottom-0 start-50 translate-middle-x" type="submit">Login</button>
                    <?php echo form_close(); ?>
                    </br>
                    <!-- Button trigger modal -->
                    <button class="btn btn-outline-success position-absolute bottom-0 end-0 translate-middle-x" data-toggle="modal" data-target="#logoutModal">Register</button>
                </div>
            </center>

            <!-- Modal -->
            <?php echo form_open('home/register/', ['method' => 'post']); ?>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Registrasi</h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group mb-3 ">
                                                <input type="text" class="form-control" name="Username" id="Username">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Password</th>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group mb-3 ">
                                                <input type="password" class="form-control" name="Password" id="Password">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="simpan" value="Simpan">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
</section>