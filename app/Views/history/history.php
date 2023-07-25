<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="sub-title">History</h2>
<div class="history-container">
    <div class="search-container">
        <form action="" class="search">
            <input type="search" placeholder="Semua Transaksi">
            <input type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
            <select name="" id="transaction">
                <option value="default">Jenis Transaksi</option>
                <option value="debit">Debit</option>
                <option value="kredit">Kredit</option>
            </select>
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
                    <th>Transaksi</th>
                    <th>Keterangan</th>
                    <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $d['Jumlah'] ?></td>
                            <td><?= $d['Tanggal'] ?></td>
                            <td><?= $d['Keterangan'] ?></td>
                            <td><?= $d['PJ'] ?></td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>