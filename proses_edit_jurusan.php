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
        $kode_jurusan=  $_REQUEST['kode_jurusan'];
        $nama_jurusan =  $_REQUEST['nama_jurusan'];
        $jenjang =  $_REQUEST['jenjang'];
        $jumlah_semester =  $_REQUEST['jumlah_semester'];
        
 
        $sql = "UPDATE jurusan SET kode_jurusan='$kode_jurusan',nama_jurusan='$nama_jurusan',jenjang='$jenjang',jumlah_semester='$jumlah_semester' WHERE id='$id'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data updated in a database successfully."
                . " "
                . " to view the updated data. <a href='tampil_jurusan.php'>Kembali</a></h3>";
 
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
