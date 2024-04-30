<div class="container col-lg-5">
        <div class="card card-body">
            <h5 class="card-title">ID & Golongan ID: <?= $data['mhs']['id'];?></h5>
            <p class="card-text">NIP: <?= $data['mhs']['nip'];?></p>
            <p class="card-text">NIK: <?= $data['mhs']['nik'];?></p>
            <p class="card-text">Nama: <?= $data['mhs']['nama'];?></p>
            <p class="card-text">Jenis Kelamin: <?= $data['mhs']['jenis_kelamin'];?></p>
            <p class="card-text">Tempat Lahir: <?= $data['mhs']['tempat_lahir'];?></p>
            <p class="card-text">Tanggal Lahir: <?= $data['mhs']['tanggal_lahir'];?></p>
            <p class="card-text">Whatsapp: <?= $data['mhs']['whatsapp'];?></p>
            <p class="card-text">Alamat: <?= $data['mhs']['alamat'];?></p>
            <p class="card-text">Golongan: <?= $data['mhs']['nama_golongan'];?></p>
            <p class="card-text">Gaji Pokok: <?=number_format($data['mhs']['gaji_pokok'],2,',','.');?></p>
            <a href="<?= BASEURL; ?>" class="btn btn-outline-secondary">Back</a>
        </div>
</div>