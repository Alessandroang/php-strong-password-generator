<?php
session_start();
include_once './functions.php';  

if (isset($_SESSION['generated_password'])) {
    $generated_password = $_SESSION['generated_password'];
    $_SESSION['generated_password'] = null;  
} else {
    $generated_password = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Password Generator</title>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Generatore Password</h1>
            <form action="#" method="get">
                <div class="form-group mt-3">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="password_length">Lunghezza Password :</label>
                    <input type="number" id="password_length" name="password_length" min="1" class="form-control" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Genera Password</button>
                </div>
            </form>

            <?php if (isset($generated_password)): ?>
                <div class="mt-3">
                    <label for="generated_password" class="mt-2">Password generata:</label>
                    <input type="text" id="generated_password" class="password form-control" value="<?= $generated_password ?>" readonly>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
