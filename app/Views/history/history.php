<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="sub-title">History</h2>
<div class="search-container">
    <form action="" class="search">
        <input type="search" placeholder="Semua Transaksi">
        <input type="date">
        <input type="submit" value="CARI" class="search-button">
    </form>

</div>

<?= $this->endSection(); ?>