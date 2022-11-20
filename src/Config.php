<?php
namespace src;

class Config {
    const BASE_DIR = '/mvc/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'megafilmes';
    CONST DB_USER = 'local';
    const DB_PASS = 'root';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}