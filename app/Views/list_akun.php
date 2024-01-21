<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Akun</title>
</head>
<body>
    <a href="<?= base_url('/') ?>">Home</a>
    <h2>List Akun</h2>
    <ul>
        <?php foreach ($accounts as $account): ?>
            <li><?= var_dump($account); ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
