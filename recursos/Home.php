<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: black; /* Cambiado a fondo negro */
            color: white; /* Cambiado a texto blanco */
        }
        
        #bienvenida {
            text-align: center;
            margin-top: 50px; /* Espaciado superior */
            font-size: 24px;
        }
        #nombreInput {
            width: 300px;
            margin: 20px auto;
            padding: 10px;
            font-size: 16px;
            text-align: center;
        }
        #nombreOutput {
            display: none;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body class="container">
    <!-- Bienvenida -->
    <div id="bienvenida">
        <h1>Welcome!</h1>
    </div>

    <!-- Cuadro de texto para ingresar el nombre -->
    <div id="nombreInput">
        <input type="text" id="nombre" >
    </div>

    </script>
</body>
</html>
