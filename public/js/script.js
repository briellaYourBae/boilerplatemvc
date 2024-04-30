$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#id').val('');
        $('#nip').val('');
        $('#nik').val('');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#tempat_lahir').val('');
        $('#tanggal_lahir').val('');
        $('#whatsapp').val('');
        $('#alamat').val('');
        $('#golongan_id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/boilerplatemvc/public/Mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/boilerplatemvc/public/Mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nip').val(data.nip);
                $('#nik').val(data.nik);
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#whatsapp').val(data.whatsapp);
                $('#alamat').val(data.alamat);
                $('#golongan_id').val(data.golongan_id);
            }
        });
        
    });

});