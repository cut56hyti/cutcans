<?php
$id = $_GET['id'];
$petugas = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas= '$id'");
$data = mysqli_fetch_array($petugas);

?>

<legend>
    <h5>Form ubah petugas</h5>
</legend>

<form action="" method="POST">
    
    <div class="form-group">
        <label for=""> username</label>
        <input type="text" name="username" class="form-control" required value="<?= $data['username'] ?>">
    </div>

    <div class="form-group">
        <label for=""> password</label>
        <input type="text" name="password" class="form-control" required value="<?= $data['pasword'] ?>">
    </div>

    <div class="form-group">
        <label for="">nama_petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required value="<?= $data['petugas'] ?>">
    </div>
    
    <div class="form-group">
        <label for="">level</label>
        <input type="text" name="level" class="form-control" required value="<?= $data['level'] ?>">
    </div>

    <button class="btn btn-ubah btn-save" name="ubah">
        ubah
    </button>

</form>

<?php

//cek apakah tombol ubah sudah di tekan
if(isset($_POST['ubah'])){
    //tampung setiap imputan
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $level = htmlspecialchars($_POST['level']);

    //maukkan kedalam database
    //koneksi
    //query
    $ubah= mysqli_query($koneksi, "UPDATE petugas SET   username = '$username', password = '$password',nama_petugas='$nama_petugas', level='$level' WHERE id_petugas = 'id' ");
    
    if($ubah){
    echo"<script>
        alert('Data Berhasil diubah');
    document.location.href='?menu=petugas';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal diubah);

</script>";
    }
}