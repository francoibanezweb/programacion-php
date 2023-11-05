<!DOCTYPE html>
<html>
<head>
    <title>Explorador de Archivos</title>
</head>
<body>
    <h1>Explorador de Archivos</h1>
    <ul>
        <?php
        $dir = './';  // Directorio actual
        $folders = scandir($dir);

        foreach ($folders as $folder) {
            if (is_dir($folder) && $folder != '.' && $folder != '..' && $folder != '.git') {
                echo '<li><a href="' . $folder . '">' . $folder . '</a></li>';
            }
        }
        ?>
    </ul>
</body>
</html>

