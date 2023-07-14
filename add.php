<?php
include "config.php";
if (isset($_POST['no_kp'])){
    $nama = $_POST['nama'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $no_hp = $_POST['no_hp'];
    $sql = "INSERT INTO info ( nama, no_kp, jantina, no_hp) VALUES ('$nama','$no_kp','$jantina','$no_hp')";
    $samb= mysqli_connect($host, $user, $password, $database);
    $hasil = mysqli_query($samb,$sql);
    if ($hasil)
        echo "<script>alert('TAMBAH PEKERJA BERJAYA');
        window.location='index.php'</script>";
        else
        echo "<script>alert('TAMBAH PEKERJA GAGAL!');
        window.location='tambah.php'</script>";
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        a:link {
            text-decoration: none;
            }

        a:visited {
            text-decoration: none;
            }

        a:hover {
            text-decoration: underline;
            }

        a:active {
            text-decoration: underline;
            }
    </style>
    </head>
 <button class="btn btn-secondary" style="margin-top:35px;" type="submit"><a href="index.php">BACK</a></button><br><br>

<body style=" background-color:BDCDD6;">
<h2 style="text-align: center;margin-top: 50px;">ADD MAKLUMAT</h2>
    <fieldset style="width: 500px;margin:auto;">
        <header>
        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
            <label for="validationCustom04" class="form-label" style=" padding-bottom: 5px;">IC </label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="no_kp" placeholder="090887031234" maxlength='12' size="15" ><br>

            <label for="validationCustom04" class="form-label">NAMA</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="nama" id="nama" placeholder="Nama anda" size="50" required><br>


            <label for="validationCustom04" class="form-label">HP</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="no_hp" id="nohp" placeholder="hp anda"  required><br>

            <label for="validationCustom04" class="form-label">JANTINA</label>
            <select class="form-select" name="jantina" id="jantina" required>
            <option selected disabled value="">--Sila Pilih--</option>
            <option>Lelaki</option>
            <option>Perempuan</option>
            </select>
          <br>
 
            <!-- butang add & clear -->
            <button class="btn btn-primary"  type="submit">add</button>
            <button  class="btn btn-secondary" type="reset">clear</button><br>
            *Pilihan hanya dibenarkan sekali sahaja.

        </form>
    </fieldset>
    
</body>


</html>
