function downloadVideo(event) {
    event.preventDefault();

    const tiktokUrl = document.getElementById('tiktok_url').value;
    const messageContainer = document.getElementById('loading-message');
    const downloadButton = event.target.querySelector('button');
    const tiktokInput = document.getElementById('tiktok_url');

    messageContainer.style.display = 'block';
    downloadButton.disabled = true;

    fetch('process.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'tiktok_url=' + encodeURIComponent(tiktokUrl),
    })
    .then(response => {
        if (response.ok) {
            const disposition = response.headers.get('Content-Disposition');
            let fileName = 'video.mp4'; 

           
            if (disposition && disposition.includes('filename=')) {
                const regex = /filename="([^"]+)"/;
                const matches = regex.exec(disposition);
                if (matches[1]) {
                    fileName = matches[1]; 
                }
            }

            return response.blob().then(blob => ({ blob, fileName }));
        } else {
            throw new Error('Error en la descarga.');
        }
    })
    .then(({ blob, fileName }) => {
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.style.display = 'none';
        a.href = url;
        a.download = fileName; 
        document.body.appendChild(a);
        a.click();
        window.URL.revokeObjectURL(url);

        
        messageContainer.style.display = 'none';

        downloadButton.disabled = false; 


        tiktokInput.value = ''; 
    })
    .catch(error => {
        console.error('Error:', error);
        messageContainer.style.display = 'none'; 
        downloadButton.disabled = false; 
    });
}