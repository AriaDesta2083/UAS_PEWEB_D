<?php

require 'model/conn.php';


//cek cookie
if(isset($_COOKIE['id'])&&isset($_COOKIE['set'])){
	$id = $_COOKIE['id'];
	$set = $_COOKIE['set'];

	$get_db = $mysqli->query("select *from data_user where id=$id");
	$tes_db = $get_db->num_rows;
	$db = $get_db->fetch_assoc();

	if( $set === password_hash('256', $db['nama'])) {
		$_SESSION['login'] = true;
	}
}

if(isset($_POST['login'])){
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = $mysqli->real_escape_string($_POST['password']);

	//cek user login 
	$get_db = $mysqli->query("select * from data_user where email ='$email'");
	$tes_db = $get_db->num_rows;
	$db = $get_db->fetch_assoc();

	if($tes_db>=1){
		//login email tersedia
		//verify password 
		if(password_verify($password,$db['password'])){
			echo '<script>alert("Login Berhasil")</script>';

			//seasion
			$_SESSION['login'] = true;
			$_SESSION['nama'] = $db['nama'];
			$_SESSION['email'] = $db['email'];
			$_SESSION['id'] = $db['id'];


			if(isset($_POST['rm'])){
				//cookie
				setcookie('id' , $db["id"] , time() + 60);
				setcookie('set' , hash('sha256',$db["nama"]), time() + 60);
			}

			header("location: /UAS");
			exit;
		}else{
			echo '<script>alert("Login Gagal")</script>';
		}
	}else{
		//login gagal, username tidak tersedia
		echo '<script>alert("Login Gagal")</script>';
	}

	$mysqli->close();
}


include 'view/index_signin.html';

?>