<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeInBody 1.5s ease-in;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
            animation: popIn 0.8s ease-out;
        }

        p {
            color: #555;
            font-size: 18px;
            animation: fadeInText 1.2s ease-in;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInText {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes popIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeInBody {
            from {
                background-color: #fff;
            }

            to {
                background: linear-gradient(to right, #74ebd5, #acb6e5);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Page de Contact</h1>
        <p>Bienvenue sur la page de contact.</p>
    </div>
</body>

</html>
