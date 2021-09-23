<?php

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class spp
$spp = new Controller_spp();
$GetSpp = $spp->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Spp</h3>
<h3><a href="main.php?menu=<?php echo base64_encode(14) ?>">Add Data</a></h3>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Tahun</th>
        <th scope="col">Nominal</th>
        <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    // Decision validation variabel
    if (isset($GetSpp)) {
        $no = 1;
        foreach ($GetSpp as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['tahun']; ?></td>
                <td><?php echo $Get['nominal']; ?></td>
                <td>
                    <a href="main.php?menu=<?php echo base64_encode(15) ?>&id_spp=<?php echo base64_encode($Get['id_spp']) ?>"><img src="view.png" style="width: 20px; height: 20px;"></a>
                    <button onclick="konfirmasi('<?php echo base64_encode($Get['id_spp']) ?>')"><img src="sampah.png" style="width: 20px; height: 20px;"></button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>
<script>
    function konfirmasi(id_spp) {
        var a=id_spp;
        if (window.confirm("Apakah anda ingin menghapus data ini?")) {
            window.location.href = '../Config/Routes.php?function=delete_spp&id_spp=' + a;

        };
    }
</script>