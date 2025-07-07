<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Страница не найдена</title>
    <style>
        body {
            background: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #e74c3c;
        }
        .error-message {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        a {
            color: #3498db;
            text-decoration: none;
            font-size: 1.2rem;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <img src="/errors/images/404.png" alt="404" style="max-width:300px; margin-bottom: 2rem;">
        <<p><a href="<?=PATH;?>">На домашнюю</a></p>
        <div class="error-code">404</div>
        <div class="error-message">Страница не найдена</div>
        <p>Возможно, вы ошиблись адресом или страница была удалена.</p>
        <a href="/">Вернуться на главную</a>
    </div>
</body>
</html>
