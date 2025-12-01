<?php include "header.php"; ?>

<h2>Edit Lagu</h2>

<form action="index.php?action=simpanEdit" method="POST">

    <input type="hidden" name="id" value="<?= $data['lagu']['id']; ?>">

    <label>Judul Lagu</label><br>
    <input type="text" name="judul" value="<?= $data['lagu']['judul']; ?>" style="width:100%; padding:10px;" required><br><br>

    <label>Artis</label><br>
    <input type="text" name="artis" value="<?= $data['lagu']['artis']; ?>" style="width:100%; padding:10px;" required><br><br>

    <button type="submit" class="btn">Update</button>
</form>

<?php include "footer.php"; ?>
