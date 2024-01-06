<?php

if(isset($_GET['id'])){
   
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost","root","","seal_todolist");

   
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'Koneksi berhasil';
    }

   
    $query = "DELETE FROM task WHERE id='$id' ";

  
    $sql = mysqli_query($conn,$query);
    mysqli_close($conn);

    if ($sql){
        echo "data berhasil dihapus";
        header("Refresh:0; url=index.php");
    } else {
        echo "gagal hapus " .mysqli_error($conn);
    }
      
}


?>