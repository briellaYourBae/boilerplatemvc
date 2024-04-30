<div class="container mt-3">
        <div class="col-lg-6">
            <?php
            Flasher::flash();
            ?>
        </div>
    <div class="row mb-2">
        <div class="col-lg-6 d-flex justify-content-between align-item-center">
            <div>
                <button type="button" class="btn btn-outline-primary tombolTambahData" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">+ Tambah Data Mahasiswa</button>
            </div>
            
            <div class="row mt-1">
                <div class="col">
                    <form action="<?= BASEURL; ?>/Home/cari/" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Data Karyawan" name="keyword" id="keyword" autocomplete="off">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="formModalLabel">Inputkan Data Yang Diminta</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="Home/tambah" method="post">
                                <div class="mb-3">
                                    <!-- <label for="id" class="col-form-label">Id Siswa:</label> -->
                                    <input type="hidden" name="id" class="form-control" id="id" placeholder="Maximal dari 10 karakter">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">nip:</label>
                                    <input type="text" name="nip" class="form-control" id="nip"  placeholder="Maximal dari 12 karakter!">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">nik:</label>
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Maximal dari 12 karakter!">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">nama lengkap:</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">jenis kelamin:</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">tempat_lahir:</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Maximal 100 karakter!">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">tanggal_lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">whatsapp:</label>
                                    <input type="text" name="whatsapp" class="form-control" id="whatsapp" placeholder="08.../+628... (Maximal 13 karakter)">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">alamat:</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">golongan_id:</label>
                                    <!-- <input type="text" name="golongan_id" class="form-control" id="golongan_id" placeholder=""> -->
                                    <select class="form-control" name="golongan_id" id="golongan_id">
                                        <?php foreach ($data['golongan'] as $item): ?>
                                        <option value="<?= $item["id"] ?>"><?= $item["nama_golongan"] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-primary">Kirim</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5 ">
        <div class="col-lg-6 ">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['id'] ?>
                        <?= $mhs['nama'] ?>
                            <a href="<?= BASEURL; ?>/home/detail/<?= $mhs['id']; ?>" class="btn btn-outline-primary float-right mx-1"> Detail</a>
                            <a href="<?= BASEURL; ?>/home/ubah/<?= $mhs['id']; ?>" class="btn btn-outline-success  float-right mx-1 tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id']; ?>"> Ubah</a>
                            <a href="<?= BASEURL; ?>/home/hapus/<?= $mhs['id']; ?>" class="btn btn-outline-danger float-right mx-1" onclick="return confirm('yakin?');"> Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<script src="http://localhost/basicmvc/public/sweetalert/sweetalert2.min.js"></script>