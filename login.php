<?php
session_start();

// Credenciales incrustadas
$valid_username = "admin";
$valid_password = "12345";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificación de credenciales
    if ($username === $valid_username && $password === $valid_password) {
        // Credenciales válidas, crear una sesión
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php"); // Redirige a una página de bienvenida o dashboard
        exit;
    } else {
        // Credenciales inválidas
        $error_message = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #58FC24, #E8F7E3 ); /* Gradiente a 90 grados */
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px; /* Aumenta el ancho máximo */
            width: 100%;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px; /* Aumenta el tamaño del título */
        }
        .login-container img {
            max-width: 150px; /* Aumenta el tamaño de la imagen */
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0; /* Aumenta el margen entre los inputs */
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 18px; /* Aumenta el tamaño de la fuente de los inputs */
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            background-color: #3EFF00;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px; /* Aumenta el tamaño de la fuente del botón */
        }
        .login-container input[type="submit"]:hover {
            background-color: #feb47b;
        }
        .error-message {
            color: red;
            font-size: 16px; /* Aumenta el tamaño de la fuente del mensaje de error */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="images/LogoH.png" alt="Logo"> <!-- Imagen encima del formulario -->
        <h2>Iniciar Sesión</h2>
        <?php
        if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }
        ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Usuario" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>
