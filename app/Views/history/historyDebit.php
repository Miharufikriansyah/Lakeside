<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">History</h2>
    <div class="history-container">
        <div class="search-container">
            <form action="" class="search">
                <input type="search" name="DataDebit" placeholder="Semua Transaksi">
                <input type="text" name="keyword" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                <input type="submit" value="CARI" class="search-button">
            </form>
        </div>
        <div class="table-container">
            <table class="history">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Penanggung Jawab</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1  + (7 * ($currentPage - 1)) ?>
                    <?php foreach ($debit as $d) : ?>
                        <tr>
                            <th><?= $i++ ?></th>
                            <td><?= $d['Jumlah'] ?></td>
                            <td><?= $d['Tanggal'] ?></td>
                            <td><?= $d['Keterangan'] ?></td>
                            <td><?= $d['PJ'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="page-container">
            <?= $pager->links('debit', 'history_pagination') ?>
        </div>
    </div>
</main>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(); ?>