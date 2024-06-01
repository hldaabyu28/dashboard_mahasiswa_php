<!DOCTYPE html>
<html>
 
<head>
    <title>Delete Page</title>
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
         
       
        $id =  $_GET['id'];
        echo $id;
         
 
        $sql = "DELETE FROM krs WHERE id='$id'";  
       
        if(mysqli_query($conn, $sql)){
            echo "<h3>data Deleted successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data. <a href='tampildata_krs.php'>Kembali</a></h3>";
 
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
