<?php $this->extend('layout/index') ?>
<?php $this->section('containt') ?>



<!DOCTYPE html>
<html>

<head>
    <title>Penyelesaian Persamaan Linear dengan Metode Gauss-Jordan</title>
</head>

<body>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card col-8">
            <div class="card-header">
                <h2>Masukkan Kebutuhan Bahan</h2>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('estimasi'); ?>">

                    <table class="table">
                        <tr>
                            <td>
                                <label for="k">Jumlah lembar kayu jati (k):</label>
                            </td>
                            <td>
                                <input type="number" name="k" id="k" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="b">Jumlah botol lem kayu (b):</label>
                            </td>
                            <td>
                                <input type="number" name="b" id="b" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="p">Jumlah paku (p):</label>
                            </td>
                            <td>
                                <input type="number" name="p" id="p" required>
                            </td>
                        </tr>
                    </table>

                    <br>

                    <input type="submit" value="Hitung" a href="hitung.php">
                </form>
            </div>
        </div>

        <br></br>
    </div>

</body>

</html>
</section>
<?php $this->endSection() ?>