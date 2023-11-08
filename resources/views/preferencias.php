<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Preferencias por usuario</title>
    <link href="/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id='preferencias'>
        <form action='' method='post'>
            <fieldset>
                <legend>Preferencias</legend>
                <div><span class='mensaje'>
                    <?php

                    // Comprobar si se ha enviado el formulario
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $idioma = $_POST['idioma'];
                        $perfpublico = $_POST['perfpublico'];
                        $zonahoraria = $_POST['zonahoraria'];

                        // Almacenar las preferencias en la sesión
                        $_SESSION['preferencias'] = [
                            'idioma' => $idioma,
                            'perfpublico' => $perfpublico,
                            'zonahoraria' => $zonahoraria,
                        ];

                        echo 'Información guardada en la sesión.';
                    }
                    ?>
                </span></div>

                <?php
                session_start();

                $preferencias = $_SESSION['preferencias'] ?? [];

                $idiomaSeleccionado = $preferencias['idioma'] ?? '';
                $perfpublicoSeleccionado = $preferencias['perfpublico'] ?? '';
                $zonahorariaSeleccionada = $preferencias['zonahoraria'] ?? '';
                ?>
                <div class='campo'>
                    <label class='etiqueta' for='idioma'>Idioma:</label><br />
                    <select name='idioma' id='idioma'>
                        <option value='ingles' <?php echo ($idiomaSeleccionado === 'ingles') ? 'selected' : ''; ?>>Inglés</option>
                        <option value='espanol' <?php echo ($idiomaSeleccionado === 'espanol') ? 'selected' : ''; ?>>Español</option>
                    </select>
                </div>
                <div class='campo'>
                    <label class='etiqueta' for='perfpublico'>Perfil público:</label><br />
                    <select name='perfpublico' id='perfpublico'>
                        <option value='si' <?php echo ($perfpublicoSeleccionado === 'si') ? 'selected' : ''; ?>>Sí</option>
                        <option value='no' <?php echo ($perfpublicoSeleccionado === 'no') ? 'selected' : ''; ?>>No</option>
                    </select>
                </div>
                <div class='campo'>
                    <label class='etiqueta' for='zonahoraria'>Zona horaria:</label><br />
                    <select name='zonahoraria' id='zonahoraria'>
                        <option value='GMT-2' <?php echo ($zonahorariaSeleccionada === 'GMT-2') ? 'selected' : ''; ?>>GMT-2</option>
                        <option value='GMT-1' <?php echo ($zonahorariaSeleccionada === 'GMT-1') ? 'selected' : ''; ?>>GMT-1</option>
                        <option value='GMT' <?php echo ($zonahorariaSeleccionada === 'GMT') ? 'selected' : ''; ?>>GMT</option>
                        <option value='GMT+1' <?php echo ($zonahorariaSeleccionada === 'GMT+1') ? 'selected' : ''; ?>>GMT+1</option>
                        <option value='GMT+2' <?php echo ($zonahorariaSeleccionada === 'GMT+2') ? 'selected' : ''; ?>>GMT+2</option>
                    </select>
                </div>
                <div>
                    <br />
                </div>
                <div class='campo'>
                    <input type='submit' name='enviar' value='Establecer preferencias' />
                </div>
                <div class='campo'>
                    <a href="mostrar.php">Mostrar preferencias</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
