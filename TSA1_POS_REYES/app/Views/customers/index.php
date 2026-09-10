<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="container page-content">
    <h1>Customer Accounts</h1>
    <p>Sample customer records stored in a static PHP array.</p>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">Full name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
