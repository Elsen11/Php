$(function () {
    $('.TombolTambahData').on('click', function () {
        $('#forModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function () {
        $('#forModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Build/Assorted Project/MVC/public/mahasiswa/Ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/Build/Assorted Project/MVC/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#jurusan').val(data.jurusan);
                $('#angkatan').val(data.angkatan);
                $('#id').val(data.id);
                console.log(data);
            }
        });

    });

});