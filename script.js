document.addEventListener('DOMContentLoaded', () => {
    const markdownInput = document.getElementById('markdown-input');
    const markdownPreview = document.getElementById('markdown-preview');
    const printBtn = document.getElementById('print-btn');

    const defaultMarkdown = '# Markdown Live Preview\n\n- Edit markdown here\n- Preview appears immediately\n\n**Enjoy!**';

    // Load saved content from localStorage if available
    const savedContent = localStorage.getItem('markdownData');
    markdownInput.value = savedContent || defaultMarkdown;
    updatePreview();

    markdownInput.addEventListener('input', () => {
        updatePreview();
        localStorage.setItem('markdownData', markdownInput.value); // Save to localStorage
    });

    function updatePreview() {
        const content = markdownInput.value.replace(/\[Pages Break\]/g, `
<div style="page-break-after: always; visibility: hidden;">\\pagebreak</div>`);
        markdownPreview.innerHTML = marked.parse(content);
    }

    printBtn.addEventListener('click', () => {
        // Save input before print in case of reload
        localStorage.setItem('markdownData', markdownInput.value);

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
        window.location.reload(); // OK now – content will reload from localStorage
    });
});
