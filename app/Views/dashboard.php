<!-- Header Template -->
<?= $this->extend('layout/template'); ?>

<!-- Main Start -->
<?= $this->section('content'); ?>
<main>
    <div class="container">
        <h2 class="sub-title">History</h2>
        <div class="option">
            <div class="opt-box">
                <a href="/History/Debit" class="opt-link">
                    <img src="/img/debit-opt.png" alt="Debit" class="img-opt">
                    <h2 class="box-title">DEBIT</h2>
                </a>
            </div>
            <div class="opt-box">
                <a href="/History/Kredit" class="opt-link">
                    <img src="/img/kredit-opt.png" alt="Kredit" class="img-opt">
                    <h2 class="box-title">KREDIT</h2>
                </a>
            </div>
        </div>
    </div>
</main>
<!-- Main End -->

<!-- Footer Template -->
<?= $this->include('layout/footer'); ?>

<?= $this->endSection(); ?>