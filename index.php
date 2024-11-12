<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">    
    <title>TikTok2MP4</title>
</head>
<body>
    <h1>TikTok downloader</h1>

    <header>
        <div class="header-container">
            <h1>TikTok2MP4</h1>
            <nav>
                <a href="#howto">¿Cómo descargar TikToks?</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <h2>Descargar videos de TikTok</h2>
        <div class="input-container">
            <form onsubmit="downloadVideo(event)">
                <label for="tiktok_url">Enlace de TikTok:</label>
                <input type="text" id="tiktok_url" name="tiktok_url" placeholder="Ingrese el link aqui..." required>
                <button type="submit">Download Video</button>
            </form>
        </div>
        <div id="loading-message" style="display:none; background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px; margin-top: 10px;">
            <p>Estamos procesando el video. Esto puede tardar unos minutos, por favor espera...</p>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <h3>Descargas ilimitadas</h3>
            <p>Descarga todos los tiktok que quieras, sin limite de descargas.</p>
        </div>
        <div class="feature">
            <h3>Sin marca de agua en los videos</h3>
            <p>Descargar TikTok sin marca de agua en la mejor calidad.</p>
        </div>
        <div class="feature">
            <h3>Compatible con MP4</h3>
            <p>Descarga TikTok en formato MP4 con resolución de 1080p.</p>
        </div>
    </section>

    <section class="howto" id="howto">
            <h3>Guía Rápida para Descargar Videos de TikTok</h3>
            <p>¡Bienvenido a TikTok2MP4! Con esta herramienta, puedes descargar fácilmente videos de TikTok sin marca de agua y en alta calidad. Sigue estos sencillos pasos para comenzar:</p>
       
            <h2>Visita TikTok</h2>
            <p>Abre la aplicación de TikTok o el sitio web en tu dispositivo y encuentra el video que deseas descargar.</p>
        
            <h2>Copiar el Enlace</h2>
            <p>Haz clic en el video que te gusta. Luego, toca el ícono de compartir (generalmente un ícono de flecha) y selecciona "Copiar enlace" para obtener la URL del video.</p>
        
            <h2>Abre TikTok2MP4</h2>
            <p>Dirígete a nuestra página de TikTok2MP4 en tu navegador.</p>
        
            <h2>Ingresa el Enlace</h2>
            <p>En la página principal, verás un cuadro de texto titulado "Enlace de TikTok". Pega el enlace que copiaste en el paso anterior en este cuadro.</p>
       
            <h2>Inicia la Descarga</h2>
            <p>Haz clic en el botón "Download Video". Esto enviará el enlace al servidor para que comience la descarga.</p>
       
            <h2>Espera un Momento</h2>
            <p>Después de hacer clic en "Download Video", verás un mensaje que dice: "Estamos procesando el video. Esto puede tardar unos minutos, por favor espera...". Esto significa que tu video se está preparando para ser descargado. Puede tardar un poco, dependiendo del tamaño del video.</p>
        
            <h2>Descarga el Video</h2>
            <p>Una vez que la descarga esté completa, el video se guardará en tu dispositivo automáticamente.</p>
        
            <h2>Disfruta Tu Video</h2>
            <p>Una vez que el video se haya descargado, podrás encontrarlo en la carpeta de descargas de tu dispositivo.</p>
    </section>

    <footer>
        <p>Descargar videos de TikTok sin marca de agua</p>
        <p>Nuestro TikTok downloader es una herramienta gratuita que lo ayuda a descargar videos de TikTok sin marca de agua. Guarde videos de TikTok en alta calidad como MP4 o MP3 con resolución HD.</p>
    </footer>
    <script src="script.js"></script> <!-- Añadir la referencia al archivo JavaScript -->
</body>
</html>

