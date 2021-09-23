<?php

include '../Controllers/Controller_petugas.php';
// Membuat Object dari Class petugas
$petugas = new Controller_petugas();
$GetPetugas = $petugas->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Petugas</h3>
<h3><a href="main.php?menu=<?php echo base64_encode(10) ?>">Add Data</a></h3>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Nama Petugas</th>
        <th scope="col">Level</th>
        <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Decision validation variabel
    if (isset($GetPetugas)) {
        $no = 1;
        foreach ($GetPetugas as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['username']; ?></td>
                <td><?php echo $Get['password']; ?></td>
                <td><?php echo $Get['nama_petugas']; ?></td>
                <td><?php echo $Get['level']; ?></td>
                <td>
                    <a href="main.php?menu=<?php echo base64_encode(11) ?>&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>"><img src="view.png" style="width: 20px; height: 20px;"></a>
                    <button onclick="konfirmasi('<?php echo base64_encode($Get['id_petugas']) ?>')"><img src="sampah.png" style="width: 20px; height: 20px;"></button>
            </tr>
    <?php
        }
    }
    ?>
</table>
<script>
    function konfirmasi(id_petugas) {
        var a=id_petugas;
        if (window.confirm("Apakah anda ingin menghapus data ini?")) {
            window.location.href = '../Config/Routes.php?function=delete_petugas&id_petugas=' + a;
        };
    }
</script>
