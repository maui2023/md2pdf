
---

# 📌 Markdown Live Preview & Print

A simple yet powerful web application to instantly render Markdown side-by-side with a live HTML preview and seamlessly print or save as PDF directly from your browser.

---

## 🚀 Features

- ✅ **Live Markdown Preview:** Instantly preview Markdown as HTML.
- ✅ **Side-by-Side Editing:** Edit Markdown and see immediate updates.
- ✅ **Print & Save as PDF:** Use built-in browser print functions to directly print or save your Markdown document.
- ✅ **Rich Styling:** Includes styled tables, code blocks, blockquotes, and more.

---

## 🛠️ Technology Stack

- **HTML5, CSS3, JavaScript**
- **[Marked.js](https://github.com/markedjs/marked)** (Markdown parsing)

---

## 🎯 Demo Screenshot

![Live Preview Demo](demo.png)

---

## 📂 Project Structure

```
markdown-live-preview/
├── index.php
├── styles.css
├── script.js
└── libraries/
    └── marked.min.js
```

---

## 💻 Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/markdown-live-preview.git
cd markdown-live-preview
```

### 2. Start PHP Built-in Server (or use Apache/Nginx)

```bash
php -S localhost:8000
```

### 3. Open in Browser

```text
http://localhost:8000/index.php
```

---

## 🖨️ How to Print / Save as PDF

- Click the `🖨️ Print / Save as PDF` button.
- In your browser’s print dialog, enable:
  - ✅ **Background graphics**  
- Choose **Save as PDF** or directly **Print**.

---

## 📖 Usage

Simply type or paste your Markdown into the editor pane (left side), and instantly view the rendered HTML preview pane (right side). When ready, use the integrated print functionality to save your Markdown document as a beautifully formatted PDF or print directly from your browser.

---

## 📝 Markdown Supported Elements:

- Headings (`#`, `##`, ...)
- Paragraphs & Lists
- Tables
- Code Blocks
- Inline code
- Blockquotes
- Images and Links

Example:

```markdown
# My Markdown Document

- Item 1
- Item 2

| Column 1 | Column 2 |
|----------|----------|
| Data 1   | Data 2   |

```php
echo "Hello Markdown!";
```


---

## 🌟 Contributing

Feel free to open an issue or submit pull requests to enhance features, improve styles, or add functionality!

---

## 📜 License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

---

**Enjoy your Markdown Live Preview & Print application!** 🎉