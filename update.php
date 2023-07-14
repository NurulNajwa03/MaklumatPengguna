<?php
include('config.php');  


if(isset($_POST['id'])) {    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $no_hp = $_POST['no_hp'];
    
    $samb = mysqli_connect($host, $user, $password, $database);
    $sql = "UPDATE info SET `id` ='$id',`nama` ='$nama', `no_kp` ='$no_kp', `jantina` = '$jantina', `no_hp` = '$no_hp' WHERE `id` = '$id'";
    $hasil = mysqli_query($samb, $sql);  
    if ($hasil) {
        echo "<script>alert('Berjaya kemaskini')</script>";echo "<script>window.location='index.php'</script>";  
    }else {
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    }    
 }  

//  $no_kp = $_GET ['no_kp'];
$sql = "SELECT * FROM info ";
$hasil = mysqli_query($samb, $sql);
while ($info = mysqli_fetch_array($hasil)) {
    $id = $info['id'];
    $nama = $info['nama'];
    $no_kp = $info['no_kp'];
    $jantina = $info['jantina'];
    $no_hp = $info['no_hp'];
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
<form action="index.php"> <button class="btn btn-secondary" style="margin-top:35px;" type="submit">Back</button><br><br>

<body style=" background-color:BDCDD6;">
<h2 style="text-align: center;margin-top: 50px;">UPDATE MAKLUMAT</h2> 
<fieldset style="width: 500px;margin:auto;">
        <header>
        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
        <label for="validationCustom04" class="form-label" style=" padding-bottom: 5px;">ID </label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="id" placeholder="101" values="<?php echo $id ?>" maxlength='12' size="15" ><br>

            <label for="validationCustom04" class="form-label" style=" padding-bottom: 5px;">IC </label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="no_kp" placeholder="090887031234" values="<?php echo $no_kp ?>"  maxlength='12' size="15" ><br>

            <label for="validationCustom04" class="form-label">NAMA</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="nama" id="nama" placeholder="Nama anda" values="<?php echo $nama ?>"  size="50" required><br>


            <label for="validationCustom04" class="form-label">HP</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="no_hp" id="no_hp" placeholder="hp anda"  required><br>

            <label for="validationCustom04" class="form-label">JANTINA</label>
            <select class="form-select" name="jantina" id="jantina"  required>
            <option selected disabled value="">--Sila Pilih--</option>
            <option>Lelaki</option>
            <option>Perempuan</option>
            </select>
          <br>
 
            <!-- butang add & clear -->
            <button class="btn btn-primary"  type="submit">Update</button>

        </form>
    </fieldset>
</body>
</html>
