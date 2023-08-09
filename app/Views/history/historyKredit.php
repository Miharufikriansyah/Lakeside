<!-- Header Template -->
<?= $this->extend('layout/template'); ?>

<!-- Main Start -->
<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">History Kredit</h2>
    <div class="history-container">
        <div class="search-container">
            <!-- Form Section Start -->
            <form action="" class="search">
                <input type="search" name="transaksi" placeholder="Cari Transaksi">
                <input type="text" name="tgl" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                <input type="submit" value="CARI" class="search-button">
                <?php if ($transaksi || $tgl) : ?>
                    <a href="/History/Kredit" class="clear"><button><i class="fa fa-times fa-xl"></i></button></a>
                <?php endif ?>
            </form>
            <!-- Form Section End -->
            <a href="/Input/Kredit" class="input-button"><button>INPUT</button></a>
        </div>
        <div class="table-container">
            <!-- Table Kredit -->
            <table class="table">
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
                    <?php $i = 1  + (7 * ($currentPage - 1)) ?>
                    <?php foreach ($kredit as $k) : ?>
                        <tr>
                            <th><?= $i++ ?></th>
                            <td><?= "Rp." . $k['Jumlah'] ?></td>
                            <td><?= $k['Tanggal'] ?></td>
                            <td><?= $k['Keterangan'] ?></td>
                            <td><?= $k['PJ'] ?></td>
                            <td class="file-img"><img class="proof-icon" src="/img/Document.png" alt="doc-icon" onclick="showModal(<?= $i ?>)"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- Main End -->

<!-- Footer Template -->
<?= $this->include('layout/footer'); ?>

<!-- Proof Image Modal -->
<?php $j = 0 ?>
<?php foreach ($kredit as $k) : ?>
    <div class="img-modal" onclick="closeModal(<?= $j++ ?>)">
        <img class="proof-img" src="/img/<?= $k['Bukti'] ?>" alt="">
    </div>
<?php endforeach ?>

<!-- JS Script -->
<script src="/js/proof.js"></script>
<script src="/js/date.js"></script>
<?= $this->endSection(); ?>