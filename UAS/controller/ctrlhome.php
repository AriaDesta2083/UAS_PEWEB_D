<?php  

require 'model/conn.php';

require 'controller/upload.php';

if( !isset($_SESSION["login"]) ) {
	$display = "display:blok";
    $display2 = "display:none";
	$display3 = "display:none";
}else {
	$id = $_SESSION['id'];
	$nama = $_SESSION['nama'];
	
	$get_up = $mysqli->query("select * from file_user where id_user = '$id'");
	$up = $mysqli->affected_rows;
	$tes_up = $get_up->num_rows;
	$pict = $get_up->fetch_assoc();
    if($pict != 0){
		$display = "display:none";
		$display2 = "display:none";
		$display3 = "display:block";
	}else{
		$display = "display:none";
		$display2 = "display:block";
		$display3 = "display:none";
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
			$_SESSION['id'] = $db['id'];
			$_SESSION['email'] = $db['email'];

			if(isset($_POST['rm'])){
				//cookie
				setcookie('id' , $db["id"] , time() + 60);
				setcookie('set' , hash('sha256',$db["nama"]), time() + 60);
			}
			header("location: /UAS");
			exit;
		}else{
			echo "Login gagal, Silakan coba lagi!";
		}
	}else{
		//login gagal, username tidak tersedia
		echo "Login gagal, Email tidak tersedia!";
	}

	$mysqli->close();
}




include 'view/home.php';



?>