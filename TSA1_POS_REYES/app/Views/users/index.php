<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="container page-content">
    <h1>User Accounts</h1>
    <p>Sample user and staff records stored in a static PHP array.</p>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
