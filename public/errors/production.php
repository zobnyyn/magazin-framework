<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Произошла ошибка</title>
    <style>
        body {
            background: #16161a;
            color: #333;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-prod-container {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 2rem 3rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            max-width: 500px;
            text-align: center;
        }
        .error-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #e74c3c;
        }
        .error-message {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        a {
            color: #3498db;
            text-decoration: none;
            font-size: 1.1rem;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="error-prod-container">
        <img src="/errors/images/404.png" alt="Ошибка" style="max-width:220px; margin-bottom: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
        <div class="error-title">Произошла ошибка</div>
        <div class="error-message">Извините, что-то пошло не так. Мы уже работаем над устранением проблемы.</div>
        <a href="/">Вернуться на главную</a>
    </div>
</body>
</html>
