<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Preferencias por usuario</title>
    <link href="/app.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id='preferencias'>
        <form action='' method='post'>
            <fieldset>
                <legend>Preferencias</legend>
                <div><span class='mensaje'></span></div>
                <!-- Recuperamos la información de la sesión -->
                <div class='campo'>
                    <label class='etiqueta' for='idioma'>Idioma:</label><br />
                    <select name='idioma' id='idioma'>
                        <option value='ingles'>Inglés</option>
                        <option value='espanol'>Español</option>
                    </select>
                </div>
                <div class='campo'>
                    <label class='etiqueta' for='perfpublico'>Perfil público:</label><br />
                    <select name='perfpublico' id='perfpublico'>
                        <option value='si'>Sí</option>
                        <option value='no'>No</option>
                    </select>
                </div>
                <div class='campo'>
                    <label class='etiqueta' for='zonahoraria'>Zona horaria:</label><br />
                    <select name='zonahoraria' id='zonahoraria'>
                        <option value='GMT-2'>GMT-2</option>
                        <option value='GMT-1'>GMT-1</option>
                        <option value='GMT'>GMT</option>
                        <option value='GMT+1'>GMT+1</option>
                        <option value='GMT+2'>GMT+2</option>
                    </select>
                </div>
                <div>
                    <br />
                </div>
                <div class='campo'>
                    <input type='submit' name='enviar' value='Establecer preferencias' />
                </div>
                <div class='campo'>
                    <a href="./mostrar.php">Mostrar preferencias</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
