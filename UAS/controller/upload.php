<?php
include 'model/conn.php';

if( isset($_SESSION["login"]) ) {
    $email = $_SESSION['email'];
    $nama = $_SESSION['nama'];
    $id = $_SESSION['id'];
}

if( isset($_POST['upload'])){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070000){			
            move_uploaded_file($file_tmp, 'file/'.$nama);
            $query = mysqli_query($conn,"INSERT INTO file_user VALUES($id, '$nama')");
            if($query){
			    echo '<script>alert("FILE BERHASIL DIUPLOAD")</script>';
                $_SESSION['upload'] = true;
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}


?>