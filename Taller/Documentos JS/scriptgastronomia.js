document.addEventListener('DOMContentLoaded', (event) => {
    document.body.onkeydown = function(event) {
        let fontFamily = '';
        let fontName = '';

        if (event.key === 'a' || event.key === 'A') {
            fontFamily = 'Arial, sans-serif';
            fontName = 'Arial';
        } else if (event.key === 's' || event.key === 'S') {
            fontFamily = '"Courier New", Courier, monospace';
            fontName = 'Courier New';
        } else if (event.key === 'd' || event.key === 'D') {
            fontFamily = '"Times New Roman", Times, serif';
            fontName = 'Times New Roman';
        }

        if (fontFamily) {
            document.body.style.fontFamily = fontFamily;
            alert(`Tecla presionada: ${event.key}\nSe cambió el tipo de letra a: ${fontName}`);
        }
    };
});
