<?php
require_once "koneksi.php";

$sql = "SELECT * FROM tbl_tamu ORDER BY id DESC";
$q = mysqli_query($conn, $sql);
?>
<table border="1" cellpadding="10" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Pesan</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($q)) : ?>
      <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['pesan']); ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>