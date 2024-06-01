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
        $nip =  $_REQUEST['nip'];
        $nama =  $_REQUEST['nama'];
        $jeniskelamin =  $_REQUEST['jeniskelamin'];
        $alamat = $_REQUEST['alamat'];
        $notlp = $_REQUEST['notlp'];
        
 
        $sql = "UPDATE dosen SET nip='$nip',nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat',notlp='$notlp' WHERE id='$id'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data updated in a database successfully."
                . " "
                . " to view the updated data. <a href='tampil_dosen.php'>Kembali</a></h3>";
 
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
