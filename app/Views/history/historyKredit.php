<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="sub-title">History</h2>
<div class="history-container">
    <div class="search-container">
        <form action="" class="search">
            <input type="search" placeholder="Semua Transaksi">
            <input type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
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
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <tr>
                        <th><?= $i ?></th>
                        <td>Rp.100.000</td>
                        <td>30/6/2023</td>
                        <td>Kecap, Saus, Sosis, Susu, Biji Kopi</td>
                        <td>Miharu Idhan Fikriansyah</td>
                        <td class="file-img"><img class="proof-icon" src="/img/Document.png" alt="doc-icon"></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>