<?php
$id = $_GET['id'];
$kelas = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa= '$id'");
$data = mysqli_fetch_array($siswa);

?>

<legend>
    <h5>Form ubah siswa</h5>
</legend>

<form action="" method="POST">
    <div class="form-group">
        <label for="">nisn</label>
        <input type="text" name="nisn" class="form-control"
         required value="<?= $data['nisn'] ?>">
    </div>

    <div class="form-group">
        <label for="">nis</label>
        <input type="text" name="nis" class="form-control" 
        required value="<?= $data['nis'] ?>">
    </div>

    <div class="form-group">
        <label for="">nama</label>
        <input type="text" name="nama" class="form-control"
         required value="<?= $data['nama'] ?>">
    </div>

    <div class="form-group">
        <label for="">kelas</label>
        <input name="kelas" id="" required="form-control">
        <option value="">--Pilih kelas--</option>
        <?php

        $kelas = mysqli_query($koneksi, " SELECT * FROM kelas")
        while($kelas = mysqli_fetch_array($kelas)){
            ?>
            <option value="<?=$kelas ['id_kelas']?>"><?=$data['nama_kelas']?> || <?=$data['kompetensi_keahlian']?>"</option>
            <?php } ?>
        
    </div>

    <div class="form-group">
        <label for="">alamat</label>
        <input type="text" name="alamat" class="form-control"
         required value="<?= $data['alamat'] ?>">
    </div>

    <div class="form-group">
        <label for="">no telp</label>
        <input type="number" name="no_telp" class="form-control"
         required value="<?= $data['no_telp'] ?>">
    </div>

    <div class="form-group">
        <label for="">spp</label>
        <input name="spp" id="" required="form-control">
        <option value="">--Pilih spp--</option>
        <?php

        $spp = mysqli_query($koneksi, " SELECT * FROM spp")
        while($spp = mysqli_fetch_array($spp)){
            ?>
            <option value="<?=$spp['id_spp']?>"><?=$data['tahun']?> || <?=$data['nominal']?>"</option>
            <?php } ?>
    </div>


    <button class="btn btn-tambah btn-save" name="ubah">
        ubah
    </button>

</form>

<?php

//cek apakah tombol ubah sudah di tekan
if(isset($_POST['ubah'])){
    //tampung setiap imputan
    $nisn = htmlspecialchars($_POST['nisn']);
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);
    $id_kelas= htmlspecialchars($_POST['id_kelas']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $id_spp = htmlspecialchars($_POST['id_spp']);

    //maukkan kedalam database
    //koneksi
    //query
    $ubah= mysqli_query($koneksi, "UPDATE siswa SET nisn = '$nisn', 
                                                    nis = '$nis', 
                                                    nama = '$nama', 
                                                    kelas= '$kelas', 
                                                    alamat='$alamat',
                                                    no_telp='$no_telp',
                                                    spp='$spp' WHERE id_siswa = '$id' ");
    
    if($ubah){
    echo"<script>
        alert('Data Berhasil diubah');
    document.location.href='?menu=kelas';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal diubah);

</script>";
    }
}