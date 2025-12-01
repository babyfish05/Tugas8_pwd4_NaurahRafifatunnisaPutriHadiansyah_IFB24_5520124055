<?php include "header.php"; ?>

<h2 style="margin-bottom:20px;">Daftar Lagu</h2>

<a href="index.php?action=tambah" class="btn">
    <i class="fa fa-plus"></i> Tambah Lagu
</a>

<br><br>

<?php foreach ($data['lagu'] as $lagu): ?>
<div class="card">
    <img>

    <div>
        <p class="card-title"><?= $lagu['judul']; ?></p>
        <p class="card-sub"><?= $lagu['penyanyi']; ?></p> <!-- FIX -->
    </div>

    <div style="margin-left:auto;" class="actions">
        <a href="index.php?action=edit&id=<?= $lagu['id']; ?>">
            <i class="fa fa-edit"></i>
        </a>

        <a href="index.php?action=delete&id=<?= $lagu['id']; ?>" 
           onclick="return confirm('Yakin ingin menghapus?')">
            <i class="fa fa-trash"></i>
        </a>
    </div>
</div>
<?php endforeach; ?>

<?php include "footer.php"; ?>
