<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="sub-title">INPUT DEBIT</h2>
<div class="input-container">
    <form action="" class="form-container">
        <label class="form-label">Jumlah</label>
        <input type="number" class="input-sum" placeholder="10.000">
        <label class="form-label">Tanggal</label>
        <!-- <input type="date" class="input-date"> -->
        <input class="input-date" type="text" placeholder="Pilih Tanggal Transaksi" id="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
        <label class="form-label">Keterangan</label>
        <textarea name="keterangan" id="keterangan" cols="30" rows="5" placeholder="Masukkan Nama Pesanan"></textarea>
        <label class="form-label">Penanggung Jawab</label>
        <select name="PJ" id="pj">
            <option value="default">--PILIH--</option>
            <option value="barista">Barista</option>
            <option value="kasir">Kasir</option>
        </select>
        <input type="submit" value="INPUT DATA" class="submit-button">
    </form>
    <img src="/img/debit-sketch.png" alt="Sketch Debit" class="sketch-img">
</div>


<?= $this->endSection(); ?>