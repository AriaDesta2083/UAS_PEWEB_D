<?php  

require 'model/conn.php';


session_start();


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

//cek seasion
if(isset($_SESSION["login"])){
	header("location: index.php");
	exit;
}


?>