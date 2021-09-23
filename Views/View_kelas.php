<?php

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Kelas</h3>
<h3><a href="main.php?menu=<?php echo base64_encode(6) ?>">Add Data</a></h3>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kelas</th>
        <th scope="col">Kompetensi Keahlian</th>
        <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Decision validation variabel
    if (isset($GetKelas)) {
        $no = 1;
        foreach ($GetKelas as $Get) {
    ?>
            <tr>
                <td scope="row"><?php echo $no++; ?></td>
                <td><?php echo $Get['nama_kelas']; ?></td>
                <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                <td>
                    <a href="main.php?menu=<?php echo base64_encode(7) ?>&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>"><img src="view.png" style="width: 20px; height: 20px;"></a>
                    <button onclick="konfirmasi('<?php echo base64_encode($Get['id_kelas']) ?>')"><img src="sampah.png" style="width: 20px; height: 20px;"></button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>


<table border="1">
</table>
<script>
    function konfirmasi(id_kelas) {
    var a=id_kelas;
        if (window.confirm("Apakah anda ingin menghapus data ini?")) {
            window.location.href = '../Config/Routes.php?function=delete_kelas&id_kelas=' + a;

        };
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>