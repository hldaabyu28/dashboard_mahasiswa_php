<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "akademik_vokasi";
   
        $conn = mysqli_connect($servername, $username, $password, $dbname);
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $nip =  $_REQUEST['nip'];
        $nama = $_REQUEST['nama'];
        $kelamin =  $_REQUEST['kelamin'];
        $alamat = $_REQUEST['alamat'];
        $telepon = $_REQUEST['telepon'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO dosen  VALUES ('','$nip',
            '$nama','$kelamin','$alamat','$telepon','','')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data. <a href='form1.php'>Kembali</a></h3>";
 
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
