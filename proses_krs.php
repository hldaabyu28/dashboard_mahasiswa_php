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
        $nim =  $_REQUEST['nim'];
        $nip =  $_REQUEST['nip'];
        $kode_mk = $_REQUEST['kode_mk'];
        $absen =  $_REQUEST['absen'];
        $uts = $_REQUEST['uts'];
        $uas = $_REQUEST['uas'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO krs  VALUES ('','$nim','$nip',
            '$kode_mk','$absen','$uts','$uas','','')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data. <a href='form5.php'>Kembali</a></h3>";
 
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
