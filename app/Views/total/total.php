<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">Cashflow</h2>
    <div class="cashflow-container">
        <table class="cashflow">
            <thead>
                <tr>
                    <th>Debit</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (6 * ($currentPage_debit - 1)) ?>
                <?php foreach ($debit as $d) : ?>
                    <tr>
                        <td class="data">
                            <p class="amount"><?= "Rp." . $d['Jumlah'] ?></p>
                            <p class="desc"><?= $d['Keterangan'] ?></p>
                            <p class="data-date"><?= $d['Tanggal'] ?></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table class="cashflow">
            <thead>
                <tr>
                    <th>Kredit</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 + (6 * ($currentPage_kredit - 1)) ?>
                <?php foreach ($kredit as $k) : ?>
                    <tr>
                        <td class="data">
                            <p class="amount"><?= "Rp." . $k['Jumlah'] ?></p>
                            <p class="desc"><?= $k['Keterangan'] ?></p>
                            <p class="data-date"><?= $k['Tanggal'] ?></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="page-container">
        <?= $pager_debit->links('debit', 'history_pagination') ?>
    </div>
    <h2 class="sub-title">Total Neraca</h4>
        <div class="neraca">
            <div class="neraca-header">
                <h3>Neraca</h3>
            </div>
            <p class="total-neraca"><?= "Rp." . $total ?></p>
        </div>
</main>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>