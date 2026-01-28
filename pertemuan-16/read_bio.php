<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_dosen ORDER BY KID DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? ''; 
  $flash_error  = $_SESSION['flash_error'] ?? ''; 
  
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
    <th>Aksi</th>
    <th>ID</th>
    <th>Kode dosen</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>JJA</th>
    <th>Prodi</th>
    <th>No hp</th>
    <th>Pasangan</th>
    <th>Anak</th>
    <th>Imu</th>
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit_bio.php?KID=<?= (int)$row['KID']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['NM_DOSEN']); ?>?')" href="delete_bio.php?cid=<?= (int)$row['KID']; ?>">Delete</a>
      </td>
      <td><?= $row['KID']; ?></td>
      <td><?= htmlspecialchars($row['KD_DOSEN']); ?></td>
      <td><?= htmlspecialchars($row['NM_DOSEN']); ?></td>
      <td><?= htmlspecialchars($row['ALMT']); ?></td>
      <td><?= htmlspecialchars($row['TGL']); ?></td>
      <td><?= htmlspecialchars($row['JJA']); ?></td>
      <td><?= htmlspecialchars($row['PRODI']); ?></td>
      <td><?= htmlspecialchars($row['NO_HP']); ?></td>
      <td><?= htmlspecialchars($row['PASANGAN']); ?></td>
      <td><?= htmlspecialchars($row['ANAK']); ?></td>
      <td><?= htmlspecialchars($row['ILMU']); ?></td>
    </tr>
  <?php endwhile; ?>
</table>