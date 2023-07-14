
<?php 
include('config.php');  

if(isset($_POST['no_kp'])) {     
    $nama = $_POST['nama']; 
    $no_kp = $_POST['no_kp']; 
    $jantina = $_POST['jantina']; 
    $no_hp = $_POST['no_hp']; 

    $samb = mysqli_connect($host, $user, $password, $database); 
    $sql = "UPDATE info SET nama ='$nama', no_kp ='$no_kp', jantina = '$jantina', no_hp = '$no_hp' WHERE no_kp = '$no_kp'"; 

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
<h2 style="text-align: center;padding-top: 100px;">KEMASKINI AHLI</h2>

<body style=" background-color:BDCDD6;">
    <fieldset style="width: 500px; text-align: center;margin:auto;">

        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
             <label>Nama Anda:</label><br>
            <input style="border-radius: 5px; padding: 5px;" class="form-control" type="text" name="nama" id="nama" 
           value="<?php echo $nama ?>" placeholder="Nama anda" size="50" required><br><br>

            <label>Nombor Kad Pengenalan :</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;"  type="text" name="no_kp" value="<?php echo $no_kp ?>" placeholder="090887031234" maxlength='12' size="15" ><br><br>

            <label>Jantina :</label><br>
            <input  required="required" type="radio" name="jantina" value="LELAKI">
            Lelaki
            <input  required="required" type="radio" name="jantina" value="PEREMPUAN">
            Perempuan<br><br>

            <label>No Hp :</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;"  type="text" name="no_hp" id="no_hp" placeholder="hp anda" value="<?php echo $no_hp ?> "required><br><br>

            

            <!-- butang daftar & reset -->
            <button class="btn btn-outline-secondary" style="border-radius: 5px; padding: 10px;"  type="submit">Kemaskini</button>
            <button class="btn btn-outline-danger" style="border-radius: 5px; padding: 10px;"  type="reset">Reset</button><br><br>
            *Pilihan hanya dibenarkan sekali sahaja.
        </form>
        <form action="index.php"> <button class="btn btn-outline-dark" style="border-radius: 5px; padding: 5px;"  type="submit">Home</button><br><br>
    </fieldset>
</body>

</html>