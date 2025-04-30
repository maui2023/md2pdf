<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Markdown Live Preview & Print</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Hide non-print elements during printing */
        @media print {
            header, .menu, footer, #print-btn, #markdown-input {
                display: none !important;
            }

            #markdown-preview {
                width: 100% !important;
                height: auto !important;
                overflow: visible !important;
                background-color: white !important;
                color: black !important;
                padding: 10mm;
            }

            body {
                margin: 0;
                padding: 0;
                background: white;
            }
        }

        header, footer {
            text-align: center;
            padding: 10px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
            border-top: 1px solid #ddd;
            font-family: Arial, sans-serif;
        }

        .menu {
            padding: 10px;
            text-align: center;
            background-color: #eee;
        }

        .menu button {
            padding: 5px 10px;
            margin: 0 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h2>MD2PDF</h2>
    </header>

    <div class="menu">
        <button onclick="insertMarkdown('# ')">H1</button>
        <button onclick="insertMarkdown('## ')">H2</button>
        <button onclick="insertMarkdown('**bold**')">Bold</button>
        <button onclick="insertMarkdown('*italic*')">Italic</button>
        <button onclick="insertMarkdown('[Pages Break]')">Pages Break</button>
    </div>

    <div class="container">
        <textarea id="markdown-input"></textarea>
        <div id="markdown-preview"></div>
    </div>

    <button id="print-btn">🖨️ Print / Save as PDF</button>

    <footer>
        Powered by Sabily Enterprise
    </footer>

    <script src="libraries/marked.min.js"></script>
    <script src="script.js"></script>
    <script>
        const textarea = document.getElementById('markdown-input');
const preview = document.getElementById('markdown-preview');

function renderMarkdown() {
    const content = textarea.value.replace(/\[Pages Break\]/g, `
<div style="page-break-after: always; visibility: hidden;">
\\pagebreak
</div>  `);
    preview.innerHTML = marked.parse(content);
}

textarea.addEventListener('input', renderMarkdown);

function insertMarkdown(md) {
    const start = textarea.selectionStart;
    const end = textarea.selectionEnd;
    const text = textarea.value;
    textarea.value = text.substring(0, start) + md + text.substring(end);
    textarea.focus();
    renderMarkdown();
}

document.getElementById('print-btn').onclick = function () {
    renderMarkdown(); // Ensure latest content
    setTimeout(() => window.print(), 100); // Allow DOM update
};

renderMarkdown(); // Initial call

    </script>
</body>
</html>
