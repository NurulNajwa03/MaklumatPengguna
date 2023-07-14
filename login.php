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

 
