<!DOCTYPE html>
<html lang="es">

<head>
    <title>Preferencias por usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
        <form action='' method='post'>
            <fieldset>
                <legend>Preferencias</legend>
                <div><span class='mensaje'><?php echo $mensaje; ?></span></div>
                <!-- Recuperamos la información de la sesión -->
                <div class='campo'>
                    <label class='etiqueta'>Idioma:</label><br />
                    <label class='texto'></label>
                </div>
                <div class='campo'>
                    <label class='etiqueta'>Perfil público:</label><br />
                    <label class='texto'></label>
                </div>
                <div class='campo'>
                    <label class='etiqueta'>Zona horaria:</label><br />
                    <label class='texto'></label>
                </div>
                <div>
                    <br />
                </div>
                <div class='campo'>
                    <input type='submit' name='borrar' value='Borrar preferencias' />
                </div>
                <div class='campo'>
                    <a href="/preferencias.php">Establecer preferencias</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>
