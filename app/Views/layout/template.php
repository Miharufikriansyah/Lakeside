<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <header>
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
</body>

</html>