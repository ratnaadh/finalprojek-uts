<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

?>
<form action="../Config/Routes.php?function=create_spp" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <input type="number" name="id_spp" onKeyPress="return numberOnly(event);" required>
        <tr>
            <td>Tahun</td>
            <td><input type="number" name="tahun" onKeyPress="return numberOnly(event);" required></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><input type="number" name="nominal" onKeyPress="return numberOnly(event);" required></td>
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