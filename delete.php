
<?php
include('config.php');


if (isset($_GET['no_kp'])) {
   $no_kp = $_GET['no_kp'];
// $no_kp = $_GET['no_kp'];
$sql = " DELETE FROM info WHERE `no_kp` = '$no_kp'";


$samb= mysqli_connect($host, $user, $password, $database);
$result = $samb->query($sql);
if ($result == TRUE){
     echo "<script>alert('Berjaya padam rekod')
     window.location='index.php'</script>";
}else{
   echo "Error:" . $sql . "<br>" . $samb->error;
}
}
?>
<!-- <html>
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">DELETE!</strong>
    <small>Adakah anda pasti untuk menghapuskan rekod ini?</small>
    <small>Sila pastikan dengan betul</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">Yes delete</button>
  </div>
</div>
</html> -->

