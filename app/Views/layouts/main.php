<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <?= $this->renderSection('content') ?>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html><div class="mb-3">
    <a href="<?= base_url('/') ?>" class="btn btn-secondary">Dashboard</a>
    <a href="<?= base_url('buku') ?>" class="btn btn-primary">Buku</a>
    <a href="<?= base_url('users') ?>" class="btn btn-success">Users</a>
    <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
</div>