<legend>
    <h5>Form Tambah Petugas</h5>
</legend>

<form action="" method="POST">
<div class="form-group">
        <label for="">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="">Level</label>
        <input type="text" name="level" class="form-control" required>
    </div>

    <button class="btn btn-tambah btn-save" name="simpan">
        Simpan
    </button>

</form>

<?php

//cek apakah tombol simpan sudah di tekan
if(isset($_POST['simpan'])){
    //tampung setiap imputan
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $level = htmlspecialchars($_POST['level']);

    //maukkan kedalam database
    //koneksi
    //query
    $simpan= mysqli_query($koneksi, "INSERT INTO petugas VALUES ('' , '$username' , '$password' , '$nama_petugas', '$level') ");

if($simpan){
    echo"<script>
        alert('Data Berhasil disimpan');
    document.location.href='?menu=petugas';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal disimpan');

</script>";
    }
}