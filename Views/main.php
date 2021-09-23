<html>
    <head>
        <title>Aplikasi Pembayaran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK NEGERI 4 KOTA BOGOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php?menu=<?php echo base64_encode(1) ?>">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php?menu=<?php echo base64_encode(2) ?>">Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php?menu=<?php echo base64_encode(3) ?>">Petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php?menu=<?php echo base64_encode(4) ?>">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main.php?menu=<?php echo base64_encode(5) ?>">Spp</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
            <div class="container-fluid">
                <?php
                if(isset($_GET['menu']))
                {
                    $id = base64_decode($_GET['menu']);
                }
                else
                {
                    $id="";
                }
                    
                    if($id==1)
                    {
                        include('View_kelas.php');
                    }
                    elseif($id==2)
                    {
                        include('View_pembayaran.php');
                    }
                    elseif($id==3)
                    {
                        include('View_petugas.php');
                    }
                    elseif($id==4)
                    {
                        include('View_siswa.php');
                    }
                    elseif($id==5)
                    {
                        include('View_spp.php');
                    }
                    elseif($id==6)
                    {
                        include('View_post_kelas.php');
                    }
                    elseif($id==7)
                    {
                        include('View_put_kelas.php');
                    }
                    elseif($id==8)
                    {
                        include('View_post_pembayaran.php');
                    }
                    elseif($id==9)
                    {
                        include('View_put_pembayaran.php');
                    }
                    elseif($id==10)
                    {
                        include('View_post_petugas.php');
                    }
                    elseif($id==11)
                    {
                        include('View_put_petugas.php');
                    }
                    elseif($id==12)
                    {
                        include('View_post_siswa.php');
                    }
                    elseif($id==13)
                    {
                        include('View_put_siswa.php');
                    }
                    elseif($id==14)
                    {
                        include('View_post_spp.php');
                    }
                    elseif($id==15)
                    {
                        include('View_put_spp.php');
                    }
                    else
                    {
                        echo "Selamat Datang";
                    }
                ?>
            </div>
    </body>
</html>