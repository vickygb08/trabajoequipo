<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    form {
      width: 300px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: blue;
      color: white;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: blue;
    }
  </style>
</head>
<body>

  <div>
    <h2 style="text-align: center;">Registro de Usuario</h2>

    <form action="/procesar_registro" method="post" onsubmit="mostrarMensaje()">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido_paterno">Apellido Paterno:</label>
      <input type="text" id="apellido_paterno" name="apellido_paterno" required>

      <label for="apellido_materno">Apellido Materno:</label>
      <input type="text" id="apellido_materno" name="apellido_materno" required>

      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Registrarse">
    </form>
  </div>

  <script>
    function mostrarMensaje() {
      alert("¡Registro Exitoso.!");
    }
  </script>

</body>
</html>
