<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
   
        $conn = mysqli_connect("localhost", "root", "", "akademik_vokasi");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $id =  $_REQUEST['id'];
        $nim =  $_REQUEST['nim'];
        $nip =  $_REQUEST['nip'];
        $kode_mk =  $_REQUEST['kode_mk'];
        $absen = $_REQUEST['absen'];
        $uts = $_REQUEST['uts'];
        $uas = $_REQUEST['uas'];
        
 
        $sql = "UPDATE krs SET nim='$nim',nip='$nip',kode_mk='$kode_mk',absen='$absen',uts='$uts',uas='$uas' WHERE id='$id'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data updated in a database successfully."
                . " "
                . " to view the updated data. <a href='tampil_krs.php'>Kembali</a></h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
