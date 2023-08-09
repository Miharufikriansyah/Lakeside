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
                    <tr>
                        <th>1</th>
                        <td>12-08-2023</td>
                        <td>Rp.10000</td>
                        <td></td>
                        <td>Kopi Susu</td>
                        <td>Jonat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pager -->
    <div class="page-container">
        <?= $pager_debit->links('debit', 'history_pagination') ?>
    </div>
</main>
<!-- Main End -->

<!--Footer Template -->
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>