<?php
if (isset($_POST['tiktok_url'])) {
    $tiktok_url = $_POST['tiktok_url'];


    $regex = "/^.*https:\/\/(?:m|www|vm)?\.?tiktok\.com\/((?:.*\b(?:(?:usr|v|embed|user|video)\/|\?shareId=|\&item_id=)(\d+))|\w+)/i";

    if (preg_match($regex, $tiktok_url)) {
        $tiktok_url = escapeshellarg($tiktok_url);
        
        $command = escapeshellcmd("python test.py $tiktok_url");
        $output = [];
        $result_code = null;

        exec($command, $output, $result_code);

        if (!empty($output)) {
            $downloaded_file = trim(end($output));
            $downloaded_file_path = __DIR__ . '/tiktoks/' . basename($downloaded_file);

            if (file_exists($downloaded_file_path)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($downloaded_file_path) . '"');
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($downloaded_file_path));

                ob_clean();
                flush();
                readfile($downloaded_file_path);
                unlink($downloaded_file_path);
                exit;
            } else {
                echo "<p>Error: El archivo no se encontró en la ruta: $downloaded_file_path</p>";
            }
        } else {
            echo "<p>Error al descargar el video.</p>";
        }
    } else {
        echo "<p>Error: Enlace de TikTok no válido.</p>";
    }
}
?>