<?php 

$condb = mysqli_connect('localhost','root','','file_user');

function getdb($query){
    global $condb;
    $go = mysqli_query($condb,$query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($go)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data_user){

    global $condb;
    $nama = htmlspecialchars($data_user["nama"]);
    $alamat = htmlspecialchars($data_user["alamat"]);
    $jk = htmlspecialchars($data_user["jk"]);
    $email = htmlspecialchars($data_user["email"]);
    $password = htmlspecialchars($data_user["password"]);

    $query = "INSERT INTO data_user VALUES (NULL, '$nama' , '$alamat', '$jk', '$email', '$password')";

    mysqli_query($condb,$query);

    return mysqli_affected_rows($condb);

}


function hapus($id){    
    global $condb;
    mysqli_query($condb, "DELETE FROM data_user WHERE data_user.ID = $id");
    return mysqli_affected_rows($condb);

}

?>
