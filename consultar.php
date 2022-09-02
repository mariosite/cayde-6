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
        <p></p>
        <?php
            $consulta = $_POST['oficina'];
            include("dbCon/conexion.php");
            $sql="SELECT * FROM $tablaDB1 WHERE ((Dependencia like '%$consulta%' ) OR (Area like '%$consulta%') OR (Extension like '%$consulta%'))";
            $resultado = mysqli_query($conexion,$sql);
            if (mysqli_num_rows($resultado) == 0) { ?>
                <p><b>No se encuentran registros en su consulta.</b></p>
                <?php mysqli_free_result ($resultado);
                include("dbCon/desconexion.php");                
            }
            else {
                $aux = ""; ?>
                <table style="max-width: 600px" id="directorio" class="table table-hover align-middle text-center table-sm">
                <thead class="table-dark">
                <tr>
                <th>Oficina</th>
                <th>Extensión/Teléfono</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_row($resultado)){
                    if ($aux != $row[1]){ ?>
                        <tr style="background-color: #f2f2f2"><td colspan = "2"><b><?= $row[1] ?>
                        </b></td></tr>
                        <?php $aux = $row[1];
                        
                    }else{
                        $aux = $row[1];			
                    } ?>
                    <tr>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    </tr>
                <?php } ?>
                </tbody>    
                </table>
                <?php mysqli_free_result ($resultado);
                include("dbCon/desconexion.php");    
            }  
        ?>
        <p></p>
        <p><a class="btn btn-outline-success" href="index.php">Regresar</a></p>
        <p></p>
	    <img alt="Logo Dirección TIC" class="img-fluid mx-auto" src="images/TIC-mini.webp" /> 
    </div>
</body>

</html>