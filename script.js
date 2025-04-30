// script.js
document.addEventListener('DOMContentLoaded', () => {
    const markdownInput = document.getElementById('markdown-input');
    const markdownPreview = document.getElementById('markdown-preview');
    const printBtn = document.getElementById('print-btn');

    const defaultMarkdown = '# Markdown Live Preview\n\n- Edit markdown here\n- Preview appears immediately\n\n**Enjoy!**';

    function updatePreview() {
        markdownPreview.innerHTML = marked.parse(markdownInput.value);
    }

    markdownInput.value = defaultMarkdown;
    updatePreview();

    markdownInput.addEventListener('input', updatePreview);

    printBtn.addEventListener('click', () => {
        const originalContent = document.body.innerHTML;
        const printContent = markdownPreview.innerHTML;

        document.body.innerHTML = `
            <html>
            <head>
                <title>Print Markdown</title>
                <style>
                    ${document.querySelector('style')?.innerHTML || ''}
                    body { font-family: Arial, sans-serif; padding: 30px; line-height: 1.6; }
                </style>
            </head>
            <body>${printContent}</body>
            </html>
        `;

        window.print();
        document.body.innerHTML = originalContent;
        window.location.reload();  // restore the original state after printing
    });
});
