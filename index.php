<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Markdown Live Preview & Print</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <textarea id="markdown-input"></textarea>
        <div id="markdown-preview"></div>
    </div>
    <button id="print-btn">🖨️ Print / Save as PDF</button>

    <script src="libraries/marked.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
