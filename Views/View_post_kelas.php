<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

?>
<form action="../Config/Routes.php?function=create_kelas" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <input type="number" name="id_kelas" onKeyPress="return numberOnly(event);" required>
        <tr>
            <td>Nama Kelas</td>
            <td><input type="text" name="nama_kelas" onKeyPress="return alphabetOnly(event);" required></td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td><input type="text" name="kompetensi_keahlian" onKeyPress="return alphabetOnly(event);" required></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table></form>

    <script>
    function numberOnly(evt){  //u
    //var e = evt || window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
        return false;
        return true;
    }
           
    function alphabetOnly
    (evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
 </script>