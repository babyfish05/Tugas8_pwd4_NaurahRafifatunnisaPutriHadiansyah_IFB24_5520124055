<?php include "header.php"; ?>

<h2 style="margin-bottom:20px;">Tambah Lagu</h2>

<form action="index.php?action=simpan" method="POST" style="max-width:500px;">

    <label>Judul Lagu</label>
    <input type="text" name="judul" required
           style="width:100%; padding:10px; margin:5px 0 15px 0;">

    <label>Penyanyi</label>
    <input type="text" name="penyanyi" required
           style="width:100%; padding:10px; margin:5px 0 15px 0;">

    <label>Genre</label>
    <input type="text" name="genre" required
           style="width:100%; padding:10px; margin:5px 0 15px 0;">

    <label>Tahun Rilis</label>
    <input type="number" name="tahun" required
           style="width:100%; padding:10px; margin:5px 0 15px 0;">

    <button type="submit" class="btn">
        <i class="fa fa-save"></i> Simpan Lagu
    </button>

</form>

<?php include "footer.php"; ?>
