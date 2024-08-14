<?php $this->extend('layout/index'); ?>

<?php $this->section('containt'); ?>

<div class='container mt-5 mb-5'>
    <h2>Estimasi Produksi</h2>
    <?php if(isset($lemari) && isset($meja) && isset($kursi)): ?>
        <h2>Hasil Estimasi:</h2>
        <p>Untuk bahan yang tersedia:</p>
        <ul>
            <li>Kayu: <?= $_POST["k"]; ?></li>
            <li>Lem: <?= $_POST["b"]; ?></li>
            <li>Paku: <?= $_POST["p"]; ?></li>
        </ul>
        
        <h3>Dapat Diproduksi:</h3>
        <table border="1">
            <tr>
                <th>Produk</th>
                <th>Jumlah yang dapat diproduksi</th>
            </tr>
            <tr>
                <td>Lemari</td>
                <td><?= $lemari; ?></td>
            </tr>
            <tr>
                <td>Meja</td>
                <td><?= $meja; ?></td>
            </tr>
            <tr>
                <td>Kursi</td>
                <td><?= $kursi; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</div>

<?php $this->endSection(); ?>
