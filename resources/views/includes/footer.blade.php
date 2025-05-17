<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Liens</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .app-footer {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 30px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .app-footer a {
            color: #1abc9c;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }

        .app-footer a:hover {
            color: #f1c40f;
        }

        .footer-links {
            margin-top: 15px;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .copyright {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <footer class="app-footer">
        <div class="footer-links">
            <a href="/inscription-utilisateur">Inscription Utilisateur</a>
            <a href="/inscription-newsletter">Newsletter</a>
            <a href="/contact">Contactez-nous</a>
            <a href="https://laravel.com/" target="_blank"><b>Maison Dyna</b></a>
        </div>

        <div class="copyright">
            &copy; {{ date('Y') }} - Développé avec ❤️ par votre équipe
        </div>
    </footer>
</body>

</html>
