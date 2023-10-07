<!-- Header Template -->
<?= $this->extend('layout/template'); ?>

<!-- Main Start -->
<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">INPUT DEBIT</h2>
    <div class="input-container">
        <!-- Form Section Start -->
        <form action="SaveDebit" method="post" class="form-container">
            <label class="form-label">Jumlah</label>
            <input name="Jumlah" type="number" for='Jumalah' class="input-sum" placeholder="10.000" id="Jumlah">
            <label class="form-label">Tanggal</label>
            <input name="date" class="input-date" for='Tanggal' type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" for='Keterangan' id="keterangan" cols="30" rows="5" placeholder="Masukkan Nama Pesanan"></textarea>
            <label class="form-label">Penanggung Jawab</label>
            <input type="text" for="PJ" id="pj">
            <input type="submit" value="INPUT DATA" class="submit-button">
        </form>
        <img src="/img/debit-sketch.png" alt="Sketch Debit" class="sketch-img">
        <!-- Form Section End -->
    </div>
</main>
<!-- Main End -->

<!-- Footer Template -->
<?= $this->include('layout/footer'); ?>

<!-- Success Alert Message -->
<?php if (session()->getFlashdata('Pesan')) : ?>
    <div class="alert-modal" onclick="closeAlert()" style="display: flex;">
        <div class="alert-box">
            <img class="check" src="/img/check.png" alt="alert">
            <p><?= session()->getFlashdata('Pesan') ?></p>
        </div>
    </div>
<?php endif ?>

<!-- JS Script -->
<script src="/js/date.js"></script>
<script src="/js/success.js"></script>
<?= $this->endSection(); ?>