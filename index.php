<!DOCTYPE html>
<html lang="es">

<head>
    <title>Directorio Municipal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div align="center" class="container mt-3">
        <h2>Directorio Alcaldía Municipal de Dosquebradas</h2>
        <form style="max-width: 500px" method="post" onsubmit="return noespacios()" action="consultar.php">
            <br>Escribe su consulta en este campo:</br>
            <div class="form-floating mb-3 mt-3">
                <input class="form-control" type="text" id="oficina" name="oficina" placeholder="Enter email" required>
                <label for="oficina">Nombre oficina o número extensión</label>
            </div>
            <button id="enviar" name="enviar" type="submit" class="btn btn-outline-success">Consultar</button>
        </form>
        <p></p>
        <p><b>Conmutador (+57) 6063116566</b></p>
        <a class="btn btn-outline-secondary btn-sm" href="consultar.php">Ver el directorio completo.</a></button>
        <p></p>
        <img alt="Logo Dirección TIC" class="img-fluid mx-auto" src="https://www.dosquebradas.gov.co/web/images/TIC-mini.webp" />
    </div>
</body>

</html>