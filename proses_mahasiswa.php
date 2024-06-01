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
        $nim =  $_REQUEST['nim'];
        $nama = $_REQUEST['nama'];
        $alamat =  $_REQUEST['alamat'];
        $jenis_kelamin = $_REQUEST['jenis_kelamin'];
        $no_tlp = $_REQUEST['no_tlp'];
        $email = $_REQUEST['email'];
        $tempat = $_REQUEST['tempat'];
        $tanggal = $_REQUEST['tanggal'];
        $link = $_REQUEST['link'];
        $id_jurusan = $_REQUEST['id_jurusan'];
        
        
        
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO mahasiswa VALUES ('','$nim',
            '$nama','$alamat','$jenis_kelamin','$no_tlp','$email','$tempat','$tanggal','$link','$id_jurusan','','')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data. <a href='form2.php'>Kembali</a></h3>";
 
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
