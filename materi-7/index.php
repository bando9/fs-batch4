<?php
// $nama = "Bando";
// $tahun_lahir = 1999;
// $umur = 2025 - $tahun_lahir;

// echo "tes <br>";
// echo "$umur";
// echo "<br>";
// if ($umur > 17) {
//     echo "$nama sudah berumur $umur tahun dan sudah memiliki KTP <br><br>";
// } else if ($umur > 7) {
//     echo "$nama sudah berumur $umur tahun, dia sudah sekolah <br><br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <form action="submit.php" method="POST" class="container mt-5 pb-5">
        <h1>Input Produk</h1>
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput" required>
        </div>
        <div class="mb-3">
            <label for="descriptionInput" class="form-label">Deksripsi</label>
            <textarea class="form-control" id="descriptionInput" name="descriptionInput" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="priceInput" class="form-label">Harga Produk (Rp)</label>
            <input type="number" class="form-control" id="priceInput" name="priceInput" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" id="category" name="category" required>
                <option selected>-- Pilih Kategori --</option>
                <option value="1">Elektronik</option>
                <option value="2">Perlengkapan Rumah</option>
                <option value="3">Fashion</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>