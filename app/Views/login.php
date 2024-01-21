<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input id="username" name="username" type="text" placeholder="Masukkan username">
        <label for="password">Password:</label>
        <input id="password" name="password" type="password" placeholder="Masukkan Password">
        <button type="submit">Login</button>
    </form>
    <span>Belum punya akun? <a href="<?= base_url('/register') ?>">Daftar!</a></span>
</body>
</html>
