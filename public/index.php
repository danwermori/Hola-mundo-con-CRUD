<?php
declare(strict_types=1);
require __DIR__.'/../config/config.php';
spl_autoload_register(function($class){
    foreach([__DIR__.'/../core',__DIR__.'/../app/controllers',__DIR__.'/../app/models'] as $b){
        $f = $b . '/' . $class . '.php';
        if(file_exists($f)){
            require $f;
            return;
    }
});
if(!is_dir(UPLOAD_DIR)){
    mkdir(UPLOAD_DIR, 0777, true);
}

$basePath = rtrim(str_replace('\\','/',dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$router = new Router($basePath);

$router->get('/',[MesajeController::class, 'index']);
$router->get('/mensajes',[MesajeController::class, 'index']);
$router->get('/mensajes/create',[MesajeController::class, 'create']);
$router->get('/mensajes/store',[MesajeController::class, 'store']);
$router->get('/',[MesajeController::class, 'index']);
$router->get('/',[MesajeController::class, 'index']);
$router->get('/',[MesajeController::class, 'index']);
$router->get('/',[MesajeController::class, 'index']);
$router->get('/',[MesajeController::class, 'index']);
$router->get('/',[MesajeController::class, 'index']);

