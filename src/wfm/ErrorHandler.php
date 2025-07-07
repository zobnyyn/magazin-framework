<?php
// подсказки пишу для себя, чтобы не забыть что к чему, иначе я нахуй запутаюсь в своём же коде
namespace Wfm;

class ErrorHandler
{
    public function __construct()
    {
        error_reporting(E_ALL); // Всегда показываем все ошибки
        set_exception_handler([$this, 'exceptionHandler']); //устанавливаем обработчик исключений
        set_error_handler([$this, 'errorHandler']); //устанавливаем обработчик ошибок
        ob_start(); // включаем буферизацию вывода, чтобы ошибки не отображались сразу
        register_shutdown_function([$this, 'fatalErrorHandler']); //устанавливаем обработчик фатальных ошибок
    }
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        if (!(error_reporting() & $errno)) {
            return; //если код ошибки не входит в список ошибок, то просто выходим
        }
        $this->logError($errstr, $errfile, $errline); //логируем ошибку
        $this->displayError($errno, $errstr, $errfile, $errline); //отображаем ошибку
        return true; //возвращаем true чтобы не было дублирования ошибок
    }
    public function fatalErrorHandler()
    {
        $error = error_get_last(); //получаем последнюю ошибку
        if (!empty($error) && $error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_CORE_ERROR)) {
            //если ошибка не пустая и это фатальная ошибка, то логируем и отображаем её
            $this->logError($error['message'], $error['file'], $error['line']);
            $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
        } else {
            //если ошибки нет, то просто выводим буфер
            ob_end_flush(); //выключаем буфер
        }
    }
    public function exceptionHandler(\Throwable $e)
    {
        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Ошибка', $e->getMessage(), $e->getFile(), $e->getLine(), 500);
    }
    protected function logError($message='', $file='', $line='') // спиздил с хабра, логирование ошибок в файл
    {
        file_put_contents(LOGS . '/error.log',
            "[" . date('Y-m-d H:i:s') . "] 
            Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n",
            FILE_APPEND);
    }
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 500) //отображение ошибок
    {
        if ($responce==0) {
            $responce = 404; //устанавливаем код ответа 404
        }
        if ($responce == 404 && !DEBUG) {
            require_once WWW . '/errors/404.php'; //если код ответа 404 и не в режиме отладки, то подключаем страницу 404
            die; //остановка скрипта
        }
        if (DEBUG) {
            require_once WWW . '/errors/development.php'; //если в режиме отладки, то подключаем страницу с ошибкой
        } else {
            require_once WWW . '/errors/production.php'; //иначе подключаем страницу с ошибкой для продакшена
        }
        die;
    }

}