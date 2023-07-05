<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="sub-title">History</h2>
<div class="history-container">
    <div class="search-container">
        <form action="" class="search">
            <input type="search" placeholder="Semua Transaksi">
            <input type="date">
            <input type="submit" value="CARI" class="search-button">
        </form>
    </div>
    <div class="table-container">
        <table class="history">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Transaksi</th>
                    <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>