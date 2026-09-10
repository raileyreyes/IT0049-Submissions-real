<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | Reyes POS</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container navigation">
            <a class="brand" href="<?= site_url('/') ?>">Reyes POS</a>

            <nav aria-label="Main navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>IT0049 Web System Technologies</p>
        </div>
    </footer>
</body>
</html>
