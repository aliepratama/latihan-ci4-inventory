<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input id="username" name="username" type="text" placeholder="Masukkan username">
        <label for="fullname">Nama Lengkap:</label>
        <input id="fullname" name="fullname" type="text" placeholder="Masukkan Nama Lengkap">
        <label for="password">Password:</label>
        <input id="password" name="password" type="password" placeholder="Masukkan Password">
        <label for="password_conf">Konfirmasi Password:</label>
        <input id="password_conf" name="password_conf" type="password" placeholder="Konfirmasi Password">
        <button type="submit">Register</button>
    </form>
    <span>Sudah punya akun? <a href="<?= base_url('/') ?>">Login!</a></span>
</body>
</html>
