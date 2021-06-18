<?php  
require 'model/conn.php';

if(isset($_POST['daftar'])){
	$nama = $mysqli->real_escape_string($_POST['nama']);
	$alamat = $mysqli->real_escape_string($_POST['alamat']);
    $jk = $_POST['jk'];
	$email = $mysqli->real_escape_string($_POST['email']);
	$pw = $mysqli->real_escape_string($_POST['password']);
	$pw_hash = password_hash($pw, PASSWORD_DEFAULT); // hash password

	$add_db = $mysqli->prepare("insert into data_user(nama,alamat,jk,email,password)values(?,?,?,?,?)");
	$add_db ->bind_param("sssss",$nama,$alamat,$jk,$email,$pw_hash);
	if($add_db ->execute()){
        echo '<script>alert("Register Berhasil")</script>';
        header("location: /UAS");
        exit;
	}else{
		echo "Gagal";
	}

	$mysqli->close();
}

include 'view/index_signup.html'


?>