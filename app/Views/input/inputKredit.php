<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <h2 class="sub-title">INPUT KREDIT</h2>
    <div class="input-container">
        <form action="SaveKredit" method="POST" class="form-container">
            <label class="form-label">Jumlah</label>
            <input name="Jumlah" type="number" class="input-sum" placeholder="10.000" id="Jumlah">
            <label class="form-label">Tanggal</label>
            <input name="date" class="input-date" type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="30" rows="5" placeholder="Masukkan Nama Pesanan"></textarea>
            <label class="form-label">Penanggung Jawab</label>
            <select name="PJ" id="pj">
                <option value="default">--PILIH--</option>
                <option value="barista">Barista</option>
                <option value="kasir">Kasir</option>
            </select>
            <label class="form-label">Upload Bukti</label>
            <label for="proof" class="file-container">
                <input name="bukti" type="file" class="proof-input" id="proof">
                <img src="/img/upload-icon.png" alt="Upload Icon" class="up-icon">
                <p class="label-text">Upload Your Image</p>
            </label>
            <input type="submit" value="INPUT DATA" class="submit-button">
        </form>
        <img src="/img/kredit-sketch.png" alt="Sketch Debit" class="sketch-img">
    </div>
</main>
<?= $this->include('layout/footer'); ?>
<script src="/js/date.js"></script>
<script src="/js/input.js"></script>
<?= $this->endSection(); ?>