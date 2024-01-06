<?php

if(isset($_GET['id'])){
  
    $id = $_GET['id'];

   
    $conn = mysqli_connect("localhost","root","","seal_todolist");


    if (mysqli_connect_errno()){
        echo "Koneksi Gagal";
        exit();
    }else{
        echo 'Koneksi berhasil';
    }
}


$query = "UPDATE task SET status=1 WHERE id='$id' ";


$sql = mysqli_query($conn,$query);
mysqli_close($conn);

if ($sql){
    echo "data berhasil diupdate";
    header("Refresh:0; url=index.php");
} else {
    echo "gagal update " .mysqli_error($conn);
}
  


?>