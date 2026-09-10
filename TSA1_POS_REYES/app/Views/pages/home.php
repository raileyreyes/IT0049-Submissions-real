<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="container page-content">
    <h1>Reyes POS</h1>
    <p>This is a basic four-page Point-of-Sale application built with CodeIgniter 4.</p>
    <p>Use the links below to view the sample account records.</p>
    <p class="actions">
        <a class="button" href="<?= site_url('customers') ?>">Customer Accounts</a>
        <a class="button" href="<?= site_url('users') ?>">User Accounts</a>
    </p>
</section>
<?= $this->endSection() ?>
