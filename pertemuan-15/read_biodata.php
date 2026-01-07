<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_about ORDER BY nmr DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? ''; #jika query sukses
  $flash_error  = $_SESSION['flash_error'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses'], $_SESSION['flash_error']); 
?>

<?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error; ?>
        </div>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Link aksi</th>
    <th>Nmr</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Hobi</th>
    <th>Pasangan</th>
    <th>Pekerjaan</th>
    <th>Nama Orang Tua</th>
    <th>Kakak</th>
    <th>Adik</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="update_biodata.php?nmr=<?= (int)$row['nmr']; ?>">Edit</a>
        <a onclick="return confirm('Kamu yakin mau ngapus <?= htmlspecialchars($row['nama']); ?>? Gamau  dipikir-pikir lagi ?')" href="delete_biodata.php?nmr=<?= (int)$row['nmr']; ?>">Delete</a>
      </td>
      <td><?= $row['nmr']; ?></td>
      <td><?= htmlspecialchars($row['nim']); ?></td>
      <td><?= htmlspecialchars($row['nama']); ?></td>
      <td><?= htmlspecialchars($row['tempat_lahir']); ?></td>
      <td><?= htmlspecialchars($row['tanggal_lahir']); ?></td>
      <td><?= htmlspecialchars($row['hobi']); ?></td>
      <td><?= htmlspecialchars($row['pasangan']); ?></td>
      <td><?= htmlspecialchars($row['pekerjaan']); ?></td>
      <td><?= htmlspecialchars($row['nama_ortu']); ?></td>
      <td><?= htmlspecialchars($row['kakak']); ?></td>
      <td><?= htmlspecialchars($row['adik']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>