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
        $nama =  $_REQUEST['nama'];
        $alamat = $_REQUEST['alamat'];
        $jenis_kelamin =  $_REQUEST['jenis_kelamin'];
        $no_tlp = $_REQUEST['no_tlp'];
        $email = $_REQUEST['email'];
        $tempat = $_REQUEST['tempat'];
        $tanggal = $_REQUEST['tanggal'];
       
 
        $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',no_tlp='$no_tlp', email='$email',tempat='$tanggal',tempat='$tanggal'  WHERE id='$id'";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data updated in a database successfully."
                . " "
                . " to view the updated data. <a href='tampil_mahasiswa.php'>Kembali</a></h3>";
 
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
