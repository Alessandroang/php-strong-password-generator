
<?php
if (isset($_GET['password_length'])) {
    $password_length = (int)$_GET['password_length'];
    
    // Funzione per generare una password casuale
    function generateRandomPassword($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_+=';
        $password = '';
        $characters_length = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $password = $password . $characters[rand(0, $characters_length - 1)];
        }
        return $password;
    }

    // Genera la password
    $generated_password = generateRandomPassword($password_length);
    
    // Salva la password nella sessione
    session_start();
    $_SESSION['generated_password'] = $generated_password;

    // Esegui il redirect alla pagina dedicata
    header('Location: index.php');
    exit();
}

    ?>