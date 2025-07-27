<?php 
    $errors = [];

    // validasi nama
    if(empty($_POST['name'])){
        $errors[] = 'Nama wajib diisi.';
    } else {
        $name = htmlspecialchars(trim($_POST['name']));
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors[] = "Nama hanya boleh berisi huruf dan spasi.";
        }
    }

    // validasi harga
    if(empty($_POST['price'])){
        $errors[] = 'Harga wajib diisi.';
    } else {
        $price = $_POST['price'];
        if(!filter_var($price, FILTER_VALIDATE_INT) || $price < 1000) {
            $errors[] = 'Harga harus berupa angka positif lebih dari 1000.';
        }
    }
    
    $description = htmlspecialchars(trim($_POST["description"] ?? ""));

    // menampilkan hasil
    if(!empty($errors)){
        foreach($errors as $error){
            echo "<p style='color: red;'>$error</p>";
        }
        echo "<a href='index.php'>Kembali ke form</a>";
    } else {
        echo "<h3>Data berhasil di validasi</h3>";
        echo "Nama: $name <br>"; 
        echo "Harga: $price <br>";
        echo "Deskripsi: $description <br>";
    }
    
    
?>