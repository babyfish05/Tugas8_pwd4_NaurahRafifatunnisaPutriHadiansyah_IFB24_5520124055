<?php include "header.php"; ?>

<h2 style="margin-bottom:20px;">Edit Lagu</h2>

<?php 
// Jika data kosong (ID tidak ditemukan)
if (!isset($data['lagu']) || !$data['lagu']) {
    echo "<p style='color:red;'>Data lagu tidak ditemukan.</p>";
    include "footer.php";
    exit;
}
?>

<form action="index.php?action=update&id=<?= $data['lagu']['id']; ?>" method="POST" style="max-width:500px;">

    <label>Judul Lagu</label>
    <input type="text" name="judul" 
           value="<?= htmlspecialchars($data['lagu']['judul']); ?>"
           style="width:100%; padding:10px; margin-bottom:15px;" required>

    <label>Penyanyi</label>
    <input type="text" name="penyanyi" 
           value="<?= htmlspecialchars($data['lagu']['penyanyi']); ?>"
           style="width:100%; padding:10px; margin-bottom:15px;" required>

    <label>Genre</label>
    <input type="text" name="genre" 
           value="<?= htmlspecialchars($data['lagu']['genre']); ?>"
           style="width:100%; padding:10px; margin-bottom:15px;" required>

    <label>Tahun Rilis</label>
    <input type="number" name="tahun" 
           value="<?= htmlspecialchars($data['lagu']['tahun_rilis']); ?>"
           style="width:100%; padding:10px; margin-bottom:15px;" required>

    <button type="submit" class="btn">
        <i class="fa fa-save"></i> Update Lagu
    </button>

</form>

<?php include "footer.php"; ?>
