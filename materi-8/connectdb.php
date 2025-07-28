<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'toko_online';

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    echo "Koneksi berhasil! <br>";


    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo $row['name'] . " ";
    }

?>