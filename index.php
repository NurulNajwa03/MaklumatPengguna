<?php
//sambung ke pangkalan data
include "config.php";
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

       <style>
        table, tr, td, th{
            margin: 50px;
            border: 1px solid ;
            border-color: 6096B4;
            border-collapse: collapse;
            padding: 10px;
            background-color: EEE9DA;
        }
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
    
    <body style="background-color:BDCDD6; padding">
        <nav style="margin:30px; border-radius:10px;align-items:center;" class="navbar navbar-light bg-light">
            <button style="margin-left:10px;" class="btn btn-outline-success me-2" type="button"><a href="add.php">Tambah</a></button>
        </form>
</nav>
        <table style="padding:30px;">
        <h1 style="padding-left: 300px;">SENARAI PELAJAR</h1>
            <tr>
                
                <th>ID</th>
                <th>NAMA PEKERJA</th>
                <th>NO KP</th>
                <th>NO HP</th>
                <th>JANTINA</th>
            </tr>
            <?php
            $samb= mysqli_connect($host, $user, $password, $database);
            $sql = "SELECT * FROM info";
            $data = mysqli_query($samb, $sql);  
            $id = 1;          
            while ($info = mysqli_fetch_array($data)) {
            ?>
            <tr>
               <!-- <td><php echo $id; ?></td> -->
               <td><?php echo $info['id']; ?></td>
               <td><?php echo $info['nama']; ?></td>
               <td><?php echo $info['no_kp']; ?></td>
               <td><?php echo $info['jantina']; ?></td>
               <td><?php echo $info['no_hp']; ?></td>
               <td><button class="btn btn-outline-primary" ><a href="update.php">Update</a></button></td>
                <td><button  class="btn btn-outline-danger"><a href="delete.php?no_kp=<?php echo $info['no_kp']; ?>" >Padam</a></button></td>
                
           </tr>
           <?php $id = $id + 1;  }?> 
           <!-- <button><a href="add.php">Tambah</a></button> -->
        </table>
    </body>
</html>
