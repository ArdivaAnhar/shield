<div class="container col-md-8 mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h5 class="card-label">Form Tabel Peminjaman Buku</h5>
        </div>
        <div class="card-body">
            <!-- button add -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBook">
                + Add
            </button>
            <!-- Form Modal Add -->
            <form action="<?php echo site_url('Welcome/add') ?>" method="post">
                <div class="modal fade" id="addBook" tabindex="-1" aria-labelledby="addBookLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addBookLabel">Form Add</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                                        required autofocus>
                                    <label for="nama" class="form-label">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="id_user" id="id"
                                        placeholder="Id Pengguna" required>
                                    <label for="id" class="form-label">Id Pengguna</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="kd_buku" id="kd_buku"
                                        placeholder="Kode Buku" required>
                                    <label for="kd_buku" class="form-label">Kode Buku</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="buku" id="buku"
                                        placeholder="Nama Buku" required>
                                    <label for="buku" class="form-label">Nama Buku</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-success">+ Add</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        <!-- end Form Modal Add -->

        <!-- table -->
        <div class="table-responsive m-3">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Id Pengguna</th>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pinjaman as $Get) : ?>
                    <tr>
                        <td><?php echo $Get->nama; ?></td>
                        <td><?php echo $Get->id_user; ?></td>
                        <td><?php echo $Get->kd_buku; ?></td>
                        <td><?php echo $Get->buku; ?></td>
                        <td>
                            <!-- button update -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#updateBook">Update</button>
                            <!-- button delete -->
                            <a href="<?php echo site_url('Welcome/delete/'.$Get->kd_buku)?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>

            </table>
        </div>
        <!-- Form Modal Update -->
        <form action="<?php echo site_url('Welcome/update') ?>" method="post">
            <div class="modal fade" id="updateBook" tabindex="-1" aria-labelledby="updateBookLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateBookLabel">Form Add</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                                    required>
                                <label for="nama" class="form-label">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="id_user" id="id"
                                    placeholder="Id Pengguna" required>
                                <label for="id" class="form-label">Id Pengguna</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="kd_buku" id="kd_buku"
                                    placeholder="Kode Buku" value="<?php echo $Get->kd_buku ?>" required autofocus>
                                <label for="kd_buku" class="form-label">Kode Buku</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="buku" id="buku" placeholder="Nama Buku"
                                    required>
                                <label for="buku" class="form-label">Nama Buku</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">
                                Update</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    <!-- end Form Modal Update -->
</div>
</div>
</div>