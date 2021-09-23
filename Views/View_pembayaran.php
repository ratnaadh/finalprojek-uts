<?php

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class pembayaran
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Pembayaran</h3>
<h3><a href="main.php?menu=<?php echo base64_encode(8) ?>">Add Data</a></h3>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Petugas</th>
        <th scope="col">NISN</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Bayar</th>
        <th scope="col">Bulan Bayar</th>
        <th scope="col">Tahun Bayar</th>
        <th scope="col">Nominal</th>
        <th scope="col">Jumlah Bayar</th>
        <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Decision validation variabel
    if (isset($GetPembayaran)) {
        $no = 1;
        foreach ($GetPembayaran as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nama_petugas']; ?></td>
                <td><?php echo $Get['nisn']; ?></td>
                <td><?php echo $Get['nama']; ?></td>
                <td><?php echo $Get['tgl_bayar']; ?></td>
                <td><?php echo $Get['bulan_dibayar']; ?></td>
                <td><?php echo $Get['tahun_bayar']; ?></td>
                <td><?php echo $Get['nominal']; ?></td>
                <td><?php echo $Get['jumlah_bayar']; ?></td>
                <td>
                    <a href="main.php?menu=<?php echo base64_encode(9) ?>&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>"><img src="view.png" style="width: 20px; height: 20px;"></a>
                    <button onclick="konfirmasi('<?php echo base64_encode($Get['id_pembayaran']) ?>')"><img src="sampah.png" style="width: 20px; height: 20px;"></button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
<script>
    function konfirmasi(id_pembayaran) {
        var a=id_pembayaran;
        if (window.confirm('apakah anda ingin menghapus data ini ?')) {
            window.location.href = '../Config/Routes.php?function=delete_pembayaran&id_pembayaran=' + a;
        };
    }
</script>
