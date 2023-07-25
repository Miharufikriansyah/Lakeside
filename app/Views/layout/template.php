<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8bc6b90944.js" crossorigin="anonymous"></script>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <header>
        <div class="hamburger-menu"><i class="fa fa-bars"></i></div>
        <h2 class="page-title">DASHBOARD</h2>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer">
        <div class="footer-bar">
            <h5 class="footer-title">Property of CAATIS-RA</h5>
        </div>
    </footer>
    <div class="img-modal">
        <img class="proof-img" src="/img/debit-opt.png" alt="">
    </div>
    <!-- Custom JS -->
    <script src="/js/date.js"></script>
    <script src="/js/hamburger.js"></script>
    <script src="/js/input.js"></script>
    <script src="/js/proof.js"></script>
</body>

</html>