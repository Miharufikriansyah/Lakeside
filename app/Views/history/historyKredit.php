<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
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
                    <?php $i = 1  + (6 * ($currentPage - 1)) ?>
                    <?php foreach ($kredit as $k) : ?>
                        <tr>
                            <th><?= $i++ ?></th>
                            <td><?= $k['Jumlah'] ?></td>
                            <td><?= $k['Tanggal'] ?></td>
                            <td><?= $k['Keterangan'] ?></td>
                            <td><?= $k['Penanggung Jawab'] ?></td>
                            <td class="file-img"><img class="proof-icon" src="/img/Document.png" alt="doc-icon" onclick="showModal()"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?= $this->include('layout/footer'); ?>
<div id="img-modal" onclick="closeModal()">
    <img class="proof-img" src="/img/debit-opt.png" alt="">
</div>
<script src="/js/proof.js"></script>
<?= $this->endSection(); ?>