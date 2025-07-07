<?php
/**
    * @var $errno \src\wfm\ErrorHandler
    * @var $errstr \src\wfm\ErrorHandler
    * @var $errfile \src\wfm\ErrorHandler
    * @var $errline \src\wfm\ErrorHandler
    * @var $responce \src\wfm\ErrorHandler
    */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка в режиме разработки</title>
    <style>
        body {
            background: #fff3cd;
            color: #856404;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .error-dev-container {
            background: #fff;
            border: 1px solid #ffeeba;
            border-radius: 8px;
            padding: 2rem 3rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            max-width: 600px;
            margin: 2rem;
        }
        .error-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .error-detail {
            margin-bottom: 1rem;
        }
        .error-label {
            font-weight: bold;
        }
        .error-file {
            font-family: monospace;
            color: #b94a48;
        }
    </style>
</head>
<body>
    <div class="error-dev-container">
        <div class="error-title">Ошибка в режиме разработки</div>
        <div class="error-detail"><span class="error-label">Тип/Код ошибки:</span> <?= htmlspecialchars($errno) ?></div>
        <div class="error-detail"><span class="error-label">Сообщение:</span> <?= htmlspecialchars($errstr) ?></div>
        <div class="error-detail"><span class="error-label">Файл:</span> <span class="error-file"><?= htmlspecialchars($errfile) ?></span></div>
        <div class="error-detail"><span class="error-label">Строка:</span> <?= htmlspecialchars($errline) ?></div>
        <div class="error-detail"><span class="error-label">HTTP-код ответа:</span> <?= htmlspecialchars($responce) ?></div>
    </div>
</body>
</html>

