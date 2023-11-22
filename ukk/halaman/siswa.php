<div class="col">
    <h3 class="judul"> Daftar Data Siswa</h3>
</div>
<div class="card">
    <div class="card-header">
        <a href="?menu=tambah-siswa" class="btn btn-tambah">Tambah</a>
    </div>

    <div class="card-body">
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nisn</th>
                <th>Nis</th>
                <th>Nama siswa</th>
                <th>kelas</th>
                <th>Alamat</th>
                <th>No telp</th>
                <th>Spp</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no =1;
                $siswa = mysqli_query($koneksi,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas JOIN spp ON siswa.id_spp = spp.id_spp ") ;
                while($data = mysqli_fetch_array($siswa)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nisn'] ?></td>
                <td><?php echo $data['nis'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nama_kelas'] . " | " . $data['kompetensi_keahlian']; ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_telp'] ?></td>
                <td><?php echo $data['tahun'] . " | " . $data['nominal']; ?></td>
                <td><a href="?menu=hapus-siswa&id=<?php echo $data['nisn']?>"
                onclick="return confirm('yakin mau dihapus');" class="btn btn-hapus">Hapus</a>
                    <a href="?menu=ubah-siswa&id=<?php echo $data['nisn']?>" class="btn btn-edit"> Ubah </a>
                </td>
            </tr>
            <?php } ?>
        </div>
                </div>