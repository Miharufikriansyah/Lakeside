<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="sub-title">Cashflow</h2>
<div class="cashflow-container">
    <table class="cashflow">
        <thead>
            <tr>
                <th>Debit</th>
                <th>Kredit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="data">
                    <p class="amount">Rp.10.000</p>
                    <p class="desc">Sirup ABC</p>
                    <p class="data-date">05/01/2023</p>
                </td>
                <td class="data">
                    <p class="amount">Rp.10.000</p>
                    <p class="desc">Sirup ABC</p>
                    <p class="data-date">05/01/2023</p>
                </td>
            </tr>
            <tr>
                <td class="data">
                    <p class="amount">Rp.10.000</p>
                    <p class="desc">Sirup ABC</p>
                    <p class="data-date">05/01/2023</p>
                </td>
                <td class="data">
                    <p class="amount">Rp.10.000</p>
                    <p class="desc">Sirup ABC</p>
                    <p class="data-date">05/01/2023</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<h2 class="sub-title">Total Neraca</h4>
    <div class="neraca">
        <div class="neraca-header">
            <h3>Neraca</h3>
        </div>
        <p class="total-neraca">Rp.1.234.567</p>
    </div>

    <?= $this->endSection(); ?>