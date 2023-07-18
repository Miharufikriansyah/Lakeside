<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="sub-title">INPUT KREDIT</h2>
<div class="input-container">
    <form action="" class="form-container">
        <label class="form-label">Jumlah</label>
        <input type="number" class="input-sum" placeholder="10.000">
        <label class="form-label">Tanggal</label>
        <input type="date" class="input-date">
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
            <input type="file" class="proof-input" id="proof">
            <img src="/img/upload-icon.png" alt="Upload Icon">
            Upload Your Image
        </label>
        <input type="submit" value="INPUT DATA" class="submit-button">
    </form>
    <img src="/img/kredit-sketch.png" alt="Sketch Debit" class="sketch-img">
</div>


<?= $this->endSection(); ?>