<?php 
 
include "config.php"; 
session_start(); 
if (isset($_POST['username'])){ 
 
    $username = $_POST['username']; 
    
    $sql = "SELECT * FROM masuk WHERE username='$username'"; 
    
    $result = mysqli_query($samb,$sql); 
    
    if (mysqli_num_rows($result)){ 
       
        $_SESSION['username']=$username; 
        
        header("Location: index.php"); 
    } 
    else{ 
        //paparkan mesej jika gagal lain  
        echo "<script>alert('username/password not match'); 
        window.location='login.php'</script>"; 
    } 
} 
?> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 
<html> 
    <body> 
         
          <h1>LOG IN</h1>  
           
            <form method="POST" > 
                 
            <div class="form-floating mb-3"> 
  <input type="username" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"> 
  <label for="floatingInput">username address</label> 
</div> 
<div class="form-floating"> 
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"> 
  <label for="floatingPassword">Password</label> 
</div> 
<br> 
                <button class="btn btn-success">Login</button> 
            </form> 
        </center> 
        </fieldset> 
    </body> 
</html>

<!-- <php
include "config.php";
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $pasword = $_POST['pasword'];
   
    $sql = "SELECT * FROM masuk WHERE username= '$username';VALUES (,'$pasword')";
    $samb= mysqli_connect($host, $user, $pasword, $database);
    $hasil = mysqli_query($samb,$sql);
    if ($hasil)
        echo "<script>alert('LOG MASUK BERJAYA');
        window.location='index.php'</script>";
        else
        echo "<script>alert('LOG MASUK GAGAL!');
        window.location='login.php'</script>";
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </head>

<body style=" background-color:BDCDD6;">
<h2 style="text-align: center;margin-top: 50px;">LOG IN</h2>
    <fieldset style="width: 500px;margin:auto;">
        
        <form method="POST">

            <label for="validationCustom04" class="form-label">NAMA</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="text" name="nama" id="nama" placeholder="Nama anda" size="50" required><br>

            <label for="validationCustom04" class="form-label">PASSWORD</label><br>
            <input class="form-control" style="border-radius: 5px; padding: 5px;" type="pasword" name="pasword" id="password" placeholder="****" size="50" required><br>

            <-- butang add & clear 
            <button class="btn btn-primary"  type="submit"><a href="index.php">LOG</a></button>

        </form>
    </fieldset>
    
</body>


</html>

<form style="text-align:center;" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">username</label>
    <input type="text" class="form-control" name="username" id="username" required>

    <label for="validationTooltip02" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" required>

  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit"><a style="text-decoration:none;color:black;" href="add.php">log</a></button>
    
  </div>
</form> -->
 
