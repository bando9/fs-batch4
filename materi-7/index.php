<?php 
    $nama = "Bando";
    $tahun_lahir = 1999;
    $umur = 2025-$tahun_lahir;
    
    echo "tes <br>";
    echo "$umur";
    echo "<br>";
    if($umur > 17){
         echo "$nama sudah berumur $umur tahun dan sudah memiliki KTP <br><br>";
    }else if($umur > 7){ 
        echo "$nama sudah berumur $umur tahun, dia sudah sekolah <br><br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        Nama: <input type="text" name="name" required><br>
        Harga: <input type="text" name="price" required><br>
        Deskripsi: <textarea name="description"></textarea><br>
        <input type="submit">
    </form>
</body>
</html>