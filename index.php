<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script>
        function validarFormulario() {
            // Llamamos a todas las funciones de validación y devolvemos true si todas son válidas
            return (
                validarNombre() &&
                validarContrasena() &&
                validarCorreo() &&
                validarTelefono()
            );
        }

        function validarNombre() {
            var nombreInput = document.getElementById("name");
            var nombreValor = nombreInput.value;

            if (nombreValor.trim() === "") {
                alert("Por favor, ingrese su nombre.");
                nombreInput.focus();
                return false;
            }

            return true;
        }

        function validarContrasena() {
            var contrasenaInput = document.getElementById("password");
            var contrasenaValor = contrasenaInput.value;

            if (contrasenaValor.length < 6) {
                alert("La contraseña debe tener al menos 6 caracteres.");
                contrasenaInput.focus();
                return false;
            }

            return true;
        }

        function validarCorreo() {
            var correoInput = document.getElementById("email");
            var correoValor = correoInput.value;

            // Expresión regular simple para verificar el formato de correo electrónico
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!regex.test(correoValor)) {
                alert("Ingrese un correo electrónico válido.");
                correoInput.focus();
                return false;
            }

            return true;
        }

        function validarTelefono() {
            var telefonoInput = document.getElementById("phone");
            var telefonoValor = telefonoInput.value;

            // Expresión regular para permitir solo números en el teléfono
            var regex = /^[0-9]+$/;

            if (!regex.test(telefonoValor)) {
                alert("El campo de teléfono solo puede contener números.");
                telefonoInput.focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form method="post" autocomplete="off" onsubmit="return validarFormulario();">
        <h2>Bienvenido</h2>

        <div class="input-group">
            <div class="input-container">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-container">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <label for="phone">Teléfono:</label>
                <input type="tel" name="phone" id="phone" placeholder="Ingrese su número de teléfono" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <a href="#">Términos y Condiciones</a>
            <input type="submit" name="send" class="btn" value="Enviar">
        </div>
    </form>
    <?php
    include("send.php");
    ?>
</body>
</html>
