<?php
//configuración para la conexión a la base de datos
define('DB_HOST', value:'localhost');
define('DB_NAME', value:'mensaje_db');
define('DB_USER', value:'root');
define('DB_PASS', value:'');
define('DB_PORT', value:'3306');
define('BASE_URL', value:'/Hola_mundo_crud_MORI/public');
define('UPLOAD_DIR', value:__DIR__.'/../public/img');
define('MAX_IMAGE_BYTES', value:2*1024*1024); // 2MB
define('ALLOWED_EXT', value:['jpeg', 'png', 'gif', 'jpg', 'webp']);
