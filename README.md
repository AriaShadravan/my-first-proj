# 🔒 PHP Secure Password Generator

A super simple, blazing fast, and cryptographically secure password generator written in pure PHP for the Command Line Interface (CLI).

![PHP Version](https://img.shields.io/badge/PHP-%E2%89%A5%207.0-777BB4?style=flat-square&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)

## ✨ Features

- **🛡️ Cryptographically Secure:** Uses PHP's native `random_int()` function to ensure true randomness.
- **🚀 Zero Dependencies:** Built with pure PHP. No need for Composer or external libraries.
- **💻 CLI Friendly:** Designed specifically to be run from your terminal.
- **🎨 Visual Feedback:** Uses CLI color codes to highlight your generated password.

## 🚀 Installation

1. Clone the repository to your local machine:
```bash
git clone https://github.com/AriaShadravan/php-secure-password-generator-v1.git
```
2. Navigate to the project directory:
```bash
cd php-secure-password-generator-v1
```

## 🛠️ Usage

You can run the script directly from your terminal. By default, it generates a robust 16-character password.

```bash
# Generate a default 16-character password
php index.php
```

You can also specify a custom length by passing an argument:

```bash
# Generate a 32-character password
php index.php 32

# Generate an 8-character password
php index.php 8
```

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! 
Feel free to check the [issues page](https://github.com/AriaShadravan/php-secure-password-generator-v1/issues).

## 📄 License

This project is [MIT](https://choosealicense.com/licenses/mit/) licensed.
