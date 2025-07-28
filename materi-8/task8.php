<?php include 'connecttask.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk E-Commerce</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container my-4">
    <h2 class="text-center mb-4">Produk E-Commerce</h2>

    <!-- Filter Form -->
    <form method="GET" action="" class="row g-3 mb-4">
      <div class="col-md-4">
        <select class="form-select" name="category">
          <option value="">Semua Kategori</option>
          <option value="Elektronik" <?= isset($_GET['category']) && $_GET['category'] == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
          <option value="Fashion" <?= isset($_GET['category']) && $_GET['category'] == 'Fashion' ? 'selected' : '' ?>>Fashion</option>
          <option value="Perlengkapan Rumah" <?= isset($_GET['category']) && $_GET['category'] == 'Perlengkapan Rumah' ? 'selected' : '' ?>>Perlengkapan Rumah</option>
          <option value="Komputer & Aksesoris" <?= isset($_GET['category']) && $_GET['category'] == 'Komputer & Aksesoris' ? 'selected' : '' ?>>Komputer & Aksesoris</option>
        </select>
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Filter</button>
      </div>
    </form>

    <!-- Produk Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $category = isset($_GET['category']) ? $_GET['category'] : '';
      if ($category) {
        $stmt = $conn->prepare("SELECT * FROM products WHERE category = ?");
        $stmt->bind_param("s", $category);
      } else {
        $stmt = $conn->prepare("SELECT * FROM products");
      }

      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">'.htmlspecialchars($row['name']).'</h5>
                <h6 class="card-subtitle mb-2 text-muted">'.htmlspecialchars($row['category']).'</h6>
                <p class="card-text">'.htmlspecialchars($row['description']).'</p>
              </div>
              <div class="card-footer bg-white">
                <strong class="text-primary">Rp '.number_format($row['price'], 0, ',', '.').'</strong>
              </div>
            </div>
          </div>';
        }
      } else {
        echo "<p class='text-center'>Tidak ada produk ditemukan.</p>";
      }

      $stmt->close();
      $conn->close();
      ?>
    </div>
  </div>

  <!-- Bootstrap JS CDN (opsional untuk komponen interaktif) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
