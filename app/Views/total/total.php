<!-- Header Template -->
<?= $this->extend('layout/template'); ?>

<!-- Main Start -->
<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">Cashflow</h2>
    <p class="total-neraca">Total Neraca : <span><?= "Rp." . $total ?></span></p>
    <div class="cashflow-container">

        <!-- Cashflow Table -->
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Keterangan</th>
                        <th>Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1 + (7 * ($currentPage - 1)); // Menghitung nomor urut dengan pagination
                    foreach ($records as $row) :
                    ?>
                        <tr>
                            <td><?= $i++ ?></td> <!-- Increment nomor urut -->
                            <td><?= $row['Tanggal'] ?></td>
                            <td><?= isset($row['Jumlah_debit']) ? "Rp." . $row['Jumlah_debit'] : '' ?></td>
                            <td><?= isset($row['Jumlah_kredit']) ? "Rp." . $row['Jumlah_kredit'] : '' ?></td>
                            <td><?= $row['Keterangan'] ?></td>
                            <td><?= $row['PJ'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pager -->
    <div class="page-container">
        <?= $pager->links('joined_data', 'history_pagination') ?>
    </div>
</main>
<!-- Main End -->

<!-- Footer Template -->
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>