<?php

include '../Controllers/Controller_siswa.php';
// Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa['nisn']);
// die; 
?>
<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Siswa</h3>
<h3><a href="main.php?menu=<?php echo base64_encode(12) ?>">Add Data</a></h3>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">NISN</th>
        <th scope="col">NIS</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Nominal</th>
        <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>

    <?php
    // Decision validation variabel
    if (isset($GetSiswa)) {
        $no = 1;
        foreach ($GetSiswa as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nisn']; ?></td>
                <td><?php echo $Get['nis']; ?></td>
                <td><?php echo $Get['nama']; ?></td>
                <td><?php echo $Get['nama_kelas']; ?></td>
                <td><?php echo $Get['alamat']; ?></td>
                <td><?php echo $Get['no_telp']; ?></td>
                <td><?php echo $Get['nominal']; ?></td>
                <td>
                    <a href="main.php?menu=<?php echo base64_encode(13) ?>&nisn=<?php echo base64_encode($Get['nisn']) ?>"><img src="view.png" style="width: 20px; height: 20px;"></a>
                    <button onclick="konfirmasi('<?php echo base64_encode($Get['nisn']) ?>')"><img src="sampah.png" style="width: 20px; height: 20px;"></button>
            </tr>
    <?php
        }
    }
    ?>
</table>

<script>
    function konfirmasi(nisn) {
        var a=nisn;
        if (window.confirm('apakah anda ingin menghapus data ini ?')) {
            window.location.href = '../Config/Routes.php?function=delete_siswa&nisn=' + a;

        };
    }
</script>







